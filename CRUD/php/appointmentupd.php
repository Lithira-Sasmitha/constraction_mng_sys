<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Appointment</title>
        <link rel="Stylesheet" href="styles/appoint.css">
        
       
        
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">
        
    </head>

    <body>
        <div class="container">
            <div class="content">
                <div class="right-side">
                    <div class="ftopic">Update an Appointment</div>
                    <p>Please fill all entries</p>
                
                     <form method="post" action="appupdate.php">
                        <div class="ibox">
                            <input type="text" name="ano" placeholder="Appointment No" >
                        </div>

                        <div class="ibox">
                            <input type="text" name="name" placeholder="Enter your Name">
                        </div>

                        <div class="ibox">
                            <input type="text" name="email" placeholder="Enter your Email">
                        </div>

                        <div class="ibox">
                            <input type="text" name="cid" placeholder="Enter your Client ID">
                        </div>

                        <div class="ibox">
                            <input type="text" name="date" placeholder="Enter Date">
                        </div>

                        
                        
                        <div class="button">
                            <input type="submit"  value="Update">
                            
                        </div>

                        
                    </form>
                </div>
               
            </div>
        </div>




    </body>
    
