Create a public API endpoint in a framework of your choice (or no framework at all if you prefer). 
Return a JSON response containing the 10 users who logged in most recently, their most recent login datetime, and how many times they've logged in in total.
Let's just assume that your system already store the datetime of each login for every user, so there is no need to build that. 
In terms of storage for both the users and the login datetimes, you can use whatever you are most comfortable with, it can be a database, Redis, or they can simply be hardcoded in separated files. 
Hit the /challenge/example-users-structure endpoint on this domain to see the structure of the response you have to follow. 
Let us know if you have any questions!

## Example JSON:
[
    {"id":5,"username":"Test 5","lastLoginAt":"2023-12-21 18:29","totalLogins":224},
    {"id":4,"username":"Test 4","lastLoginAt":"2023-12-21 18:27","totalLogins":200},
    {"id":42,"username":"Test 42","lastLoginAt":"2023-12-21 18:24","totalLogins":1},
    {"id":22,"username":"Test 22","lastLoginAt":"2023-12-21 18:20","totalLogins":21},
    {"id":829,"username":"Test 829","lastLoginAt":"2023-12-21 18:15","totalLogins":12},
    {"id":15,"username":"Test 15","lastLoginAt":"2023-12-21 18:09","totalLogins":224},
    {"id":14,"username":"Test 14","lastLoginAt":"2023-12-21 18:02","totalLogins":200},
    {"id":142,"username":"Test 142","lastLoginAt":"2023-12-21 17:54","totalLogins":1},
    {"id":122,"username":"Test 122","lastLoginAt":"2023-12-21 17:45","totalLogins":21},
    {"id":1829,"username":"Test 1829","lastLoginAt":"2023-12-21 17:35","totalLogins":12}
]
