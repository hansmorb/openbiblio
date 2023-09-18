# openbiblio
Fork of https://openbiblio.de/
Slowly trying to make it work for PHP8 to support legacy libraries.
This is the German translation of OpenBiblio.

What works:
- Base setup (without test-data)
- Login
- Most basic screens
- Most queries
- Checking media in / out
- Creating users

What doesn't work:
- Some reports
- Probably a lot more

# Spin up development enviroment
1. Clone the GitHub repository to a local folder
2. Make sure you have docker installed on your development machine
3. Run `docker-compose up -d` to start a development server
4. Go to `localhost:4523` in your webbrowser (sorry for the weird port, all of the usual ports were in use on my machine)
