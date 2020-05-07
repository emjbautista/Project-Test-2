CREATE DATABASE project;
USE project;
CREATE TABLE boxes (
    Boxnumber VARCHAR(20),
    Boxlocation VARCHAR(50),
    Boxtype VARCHAR(50),
	Connectiontype VARCHAR(50),
    PRIMARY KEY (Boxnumber)
);
CREATE TABLE employee (
    ID INTEGER AUTO_INCREMENT,
    UName VARCHAR(50),
    Pass VARCHAR(50),
	Permission VARCHAR(50),
    PRIMARY KEY (ID)
);
CREATE TABLE tickets (
    Ticketnumber INTEGER AUTO_INCREMENT,
    Boxnumber VARCHAR(20),
    Date timestamp,
    Techassigned VARCHAR(20),
	Location VARCHAR(50),
	Reportedproblem VARCHAR(50),
	Resolution VARCHAR(254),
	Timestart time,
	Timeend time,
	Followup VARCHAR(50),
	Status VARCHAR(50),
    PRIMARY KEY (Ticketnumber),
	FOREIGN KEY (Boxnumber)
		REFERENCES boxes(Boxnumber)
		ON UPDATE RESTRICT ON DELETE RESTRICT
);

INSERT INTO boxes (Boxnumber, Boxlocation, Boxtype, Connectiontype) 
VALUES
    (1001, "NE of Atlantic Ave and Meridian St", "Alpha","Radio"),
    (1002, "NE of 5th Ave and Madison", "Alpha","Fiber"),
    (1003, "Ave B", "Alpha","Fiber"),
    (1004, "NE of Atlantic Ave and Meridian St", "Alpha","Radio"),
    (1005, "Ave I", "Beta","Radio");

INSERT INTO employee (ID, UName, Pass, Permission) 
VALUES
    (1, "admin", "admin", "administrator"),
    (2, "tech1", "tech1", "technician"),
    (3, "tech2", "tech2", "technician"),
	(4, "tech3", "tech3", "technician");

INSERT INTO tickets (Ticketnumber, Boxnumber, Date, Techassigned, Location, Reportedproblem, Resolution, Timestart, Timeend, Followup, Status) 
VALUES
    (1, "1001", "2020-05-03 01:09:43", "tech1", "Home", "NVR Problem", "Changed radios, NVR, and camera1. Also reterminateed fiber on the junction box", "09:00:00", "10:00:00", "Yes", "Closed"),
    (2, "1002", "2020-05-03 01:09:43", "tech1", "Home", "NVR Problem", "Changed radios", "09:00:00", "10:00:00", "Yes", "Closed"),
    (3, "1003", "2020-05-03 01:09:43", "tech1", "Home", "NVR Problem", "Changed radios", "09:00:00", "10:00:00", "Yes", "Closed"),
	(4, "1002", "2020-05-02 11:09:43", "tech1", "Office", "NVR Problem", "Changed radios and Camera 1", "09:00:00", "10:00:00", "Yes", "Open"),
	(5, "1003", "2020-05-01 14:09:43", "tech1", "Office", "NVR Problem", "Changed radios and Camera 2", "09:00:00", "10:00:00", "Yes", "Open"),
	(6, "1001", "2020-05-02 11:49:43", "tech2", "Home", "NVR Problem", "Changed NVR and Camera 1", "09:00:00", "10:00:00", "Yes", "Closed");
	
ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'it635';
FLUSH PRIVILEGES;