## Task 1: Understand the Flow
The user types their email into a form and clicks submit, which sends a POST request to Laravel. Laravel then validates the input and stores the email into the session — a temporary server-side memory. Once saved, the page reloads and reads from the session to display all the stored emails to the user. This cycle repeats every time a new email is added. Since the data lives in the session, it only lasts as long as the browser session is active — closing the browser or clearing the session wipes everything out.


## Reflection Question:
1. What is the difference between GET and POST?
GET is like looking at a menu — you're just requesting to see something,
and the info shows up right in the URL. POST is like placing your order —
you're sending data to the server and it stays hidden in the background.
So GET fetches, POST submits.

2. Why do we use @csrf in forms?
Without it, a shady website could secretly submit a form to your app
pretending to be you. @csrf adds a hidden token to your form so Laravel
can verify the request actually came from your site. No token, no entry —
Laravel shuts it down with a 419 error.

3. What is session used for in this activity?
Since the web forgets everything after each request, sessions act like
a temporary sticky note. In this activity, it holds the list of emails
so they're still there even after the page reloads.

4. What happens if session is cleared?
Everything's gone. The email list disappears and the page starts fresh.
Sessions are just temporary — if you want data to stick around for good,
you'd need to save it to a database instead.