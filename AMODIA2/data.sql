CREATE TABLE Barista (
Barista_ID INT AUTO_INCREMENT PRIMARY KEY,
Barista_Name VARCHAR (50),
Barista_Specialty VARCHAR (50),
date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

CREATE TABLE Coffee (
Coffee_ID  INT AUTO_INCREMENT PRIMARY KEY,
Coffee_Menu VARCHAR (50),
Barista_ID VARCHAR (50),
Coffee_cost INT,
date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)