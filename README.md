# session-fixation-lab
this lab is design to get hands on session fixation  
description:
**Session Fixation** is a type of web security attack where an attacker forces a victim to use a specific session ID, allowing the attacker to hijack the victim's session once they authenticate. Unlike **session hijacking**, where an attacker steals an active session ID, session fixation occurs **before** authentication.

---

### **How Session Fixation Works**
1. **Attacker Sets a Session ID**: The attacker tricks the victim into using a pre-set session ID by embedding it in a URL, cookie, or hidden form field.
2. **Victim Logs In**: The victim unknowingly authenticates using the attacker's session ID.
3. **Attacker Gains Access**: Since the session ID remains the same post-authentication, the attacker can use it to access the victim’s account.

---

### **Common Attack Vectors**
- **URL Parameters**: `https://example.com/login?sessionid=123456`
- **Malicious Links in Emails or Chat**: A victim clicks on a link with a fixed session ID.
- **Cross-Site Scripting (XSS)**: Injecting a fixed session ID through a vulnerable website.
- **Man-in-the-Middle (MITM) Attacks**: Intercepting and modifying session cookies.

---

### **How to Prevent Session Fixation**
✅ **Regenerate Session IDs Upon Login** – Ensure that a new session ID is generated when a user logs in.  
✅ **Use Secure Cookies** – Mark session cookies as `HttpOnly` and `Secure` to prevent client-side access and enforce HTTPS.  
✅ **Implement Session Timeouts** – Expire inactive sessions after a short duration.  
✅ **Restrict Session Scope** – Bind sessions to IP addresses or User-Agents to prevent unauthorized use.  
✅ **Disable URL-Based Sessions** – Avoid passing session IDs in URLs to prevent exposure in logs and referrer headers.  

