# Project-Test-2
IT 635 Project

This project is composed of three elements; adminer, mysql, and phpmyadmin.
Adminer is running on localhost:8080 and the webserver is running on localhost:8888.

Login information:

For administrator

username: admin
password:admin

For technician

username:tech1
password: tech1


This project mimics what could be described as a custom helpdesk with a ticket based system. The ticketing system is based on enclosures
residing on street poles that house telecommunication equipment.

Administrators in this ticketing system are responsible for creating new/editing/deleting "boxes", as well as creating/deleting tickets. 
They can also create new users (new admnistrators or technicians).

Technicians are responsible of editing "Box" information and editing tickets that are assigned to them. They cannot create or delete
tickets or create and delete "boxes".

This project is based solely on Docker, MYSQL, and PHP. After running the command "docker-compose up", Docker will spin up
an SQL container as well as a web server container. There is a init-SQL setup file that will create the correspoding database, tables,
and necessary entries on the tables. 

This project offered a great insight on how Docker can be versatile when creating new projects and testing them, as well as showing
the powerful tool that MYSQL and PHP can be. 
