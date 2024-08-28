# RoomSewa
This is a room rental website
Login/signup 
SignUP
1. Database design for 
table: teenants(id,name,email,address,phoeno,password)
table: owners(id,name,email,address,phoeno,password)


2. form validation and frontend backend

3. user submit the request 

4. server accepts the request
    i.get details from client 
    ii.check for validation
    iii.check if email is already exists
    iv. if not exits then 
        then hash password and then insert into database
     v. then conn is successful then rediret to login page


5. hash password and then check whether email and hash password exists in database if not found
    throw invalid error 
                    if password and email matches in datbase create new session and send in new cokkie
                        redirec to homepage

  6. user send cookie to get homepage  serevr checks the cookie athen if it is valid it garnts the ewquest                          

