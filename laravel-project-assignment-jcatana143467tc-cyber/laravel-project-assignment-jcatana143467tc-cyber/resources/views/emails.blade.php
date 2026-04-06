<x-layout>
    <br><br><br><br>
    <h1>Email List</h1>

    {{-- ✅ SUCCESS MESSAGE --}}
    @if(session('success'))
        <div style="color: green; font-weight: bold;">
            ✅ {{ session('success') }}
        </div>
    @endif

    {{-- ❌ ERROR MESSAGES --}}
    @if($errors->any())
        <div style="color: red;">
            @foreach($errors->all() as $error)
                <p>❌ {{ $error }}</p>
            @endforeach
        </div>
    @endif

    {{-- ⚠️ LIMIT WARNING --}}
    @if(session('warning'))
        <div style="color: orange; font-weight: bold;">
            ⚠️ {{ session('warning') }}
        </div>
    @endif

    {{-- 📧 FORM --}}
    @if(count(session('emails', [])) < 5)
        <form method="POST" action="/emails">
            @csrf
            <input type="text" name="email" placeholder="Enter email" value="{{ old('email') }}">
            <button type="submit">Add Email</button>
        </form>
    @else
        <p style="color: orange;">⚠️ Maximum of 5 emails reached!</p>
    @endif

    {{-- 📋 EMAIL LIST --}}
    <h3>Saved Emails:</h3>
    @forelse(session('emails', []) as $index => $email)
        <div>
            {{ $email }}
            {{-- DELETE SINGLE EMAIL --}}
            <form method="POST" action="/emails/delete" style="display:inline;">
                @csrf
                <input type="hidden" name="index" value="{{ $index }}">
                <button type="submit">🗑 Delete</button>
            </form>
        </div>
    @empty
        <p>No emails saved yet.</p>
    @endforelse

    {{-- 🗑 DELETE ALL --}}
    @if(count(session('emails', [])) > 0)
        <br>
        <form method="POST" action="/emails/clear">
            @csrf
            <button type="submit" style="color:red;">🗑 Delete All</button>
        </form>
    @endif

</x-layout>