# HTTP 5202: PHP Project
## By: The WebDevs

### Our Database Design
![Database Design](https://github.com/2021-Winter-HTTP-5202-A/OnRoute/blob/main/images/database_design/database_design.png)

### Feature 1 submission
#### Nai-Hsien: accommodations.php and models/Hotel.php
- Still working on search functionality for hotels by city name
- Database.php connection string changed to localhost. Didn't push to github to avoid merging conflict.

#### Will Midgette: flightNumberSearch.php and flightInfo.php
- Feature allows a user to enter their flight number to check the details of their flight
- Validation on flightNumberSearch.php tells user if they have not entered a flight number, or if the database could not find a flight from the flight number they entered
- If the database can find a flight with the entered flight number, it stores it as a session variable and redirects the user to the flightInfo.php page

#### Alexis Arevalo: vehicles.php and vehicleSelection.php
- Displaying all the available vehicles in the database, and the user can select a vehicle by selecting it.
- When the user selects a vehicle, they are redirected to the info page of the selected vehicle that is retrieved by an 'id'.
- Validating inputs made to vehicle search form. - working on retrieveing the information to display.


