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

#### Daniel Guinto: flights.php and models/Flights.php

- Main search feature that allows users to search the flights table based off of airports, dates, airlines, etc.
- Validation checks if user left field empty, or if search input does not have any results
- Successful results will display a table with all the values matching the search result
- Flights that have passed will display a "Book Unavailable" notice
- Flights that are in the future will display a "Book" button. If the user clicks the button, the data from the flight they selected will be saved and they will be carried over to the mealSelection.php page. Their selected flight will appear on this page, and they will be prompted to select a meal for their flight.
