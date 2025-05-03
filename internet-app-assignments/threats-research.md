# Web Security Threats

## 1. SQL Injection
Occurs when an attacker manipulates SQL queries to access unauthorized data. Use prepared statements to prevent this.

## 2. Cross-site Scripting (XSS)
XSS lets attackers inject malicious scripts. Prevent by sanitizing input and encoding output.

## 3. Cross-Site Request Forgery (CSRF)
CSRF tricks users into performing actions. Use CSRF tokens for verification.

## 4. Session Hijacking
Stolen session IDs allow impersonation. Use HTTPS and regenerate session IDs.

## 5. Insecure Password Storage
Storing plain passwords is dangerous. Use hashing (bcrypt) for storage.

## 6. File Upload Vulnerabilities
Uploading malicious files can lead to code execution. Validate and restrict file types.
