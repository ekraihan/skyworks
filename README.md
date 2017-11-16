## TicketHawk

In the latest iteration of Ticket Hawk, I added the ability for users to create tickets. Users and agents
can also view their tickets and respond to tickets. I also added rudimentary user report to the admin's
report page.

### User login: http://corsair.cs.iupui.edu:21191/skyworks.com
Username: elias Password: test123

### Agent Login: http://corsair.cs.iupui.edu:21191/skyworks.com/agent_login
Username: ekraihan Password: test123

### Admin Login: http://corsair.cs.iupui.edu:21191/skyworks.com/admin_login
Username: theadmin Password: test123

There is full validation for registration and user editing

All of the tables in the database are created

This application uses an MVC design. Navigating to the index page with certain parameters
in the url will load up the appropriate controller which will load up the appropriate model and view

All of the web-pages are in the `views` directory<br>
All of the controllers are in the `controllers` directory<br>
Each controller corresponds to a view of the same name<br>
Styles, models, javascript, utils and outside libraries are in their own directories