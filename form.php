
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/4_bootstrap.min.css">
    <title>Register</title>
    <style>
        body{
            /* background:url('app.jpg'); */
            /* background-position:center; */
        }
        .container{
            margin-top:150px;
            background:;
            border-radius:7px;
    
        }
        h1{

            text-align:center;
            margin-bottom:30px;
            color:;
        }
        label,span{
            color:;
        }

    
    </style>
</head>

<body>
<div class="container"style="border:solid">
    <form action="ass.php" method="post">
    <h1>Register Form</h1>
            <div class="row">
                <div class="col-4">
                    <div class="form-group"> 
                        <label for="">FIRSTNAME:</label>
                     <input type="text" name="" placeholder="enter firstname" class="form-control">  
                    </div>
                
                </div>
                <div class="col-4">
                    <div class="form-group"> 
                        <label for="">MIDDLENAME:</label> <br> 
                        <input type="text" name="" placeholder="enter middlename" class="form-control">  
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group"> 
                        <label for="">LASTNAME: </label> 
                        <input type="text" name="" placeholder="enter lastname" class="form-control">  
                    </div>
                </div>
            
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group"> 
                        <label for="">NATIONALITY:</label>
                     <input type="text" name="uername" placeholder="enter nationality" class="form-control">
                            <!-- <select name='dropbox' class="form-control">
                                <option value='ap' >NIGERIA</option>
                                <option value='tml' >INDIA</option>
                                <option value='tml' >ENGLAND</option>
                                <option value='tml' >USA</option>
                                <option value='tml' >PAKISTAN</option>
                                <option value="tml">Palastine</option>
                                <option value="tml"></option>
                            </select> -->
                    </div>
                
                </div>
                <div class="col-4">
                    <div class="form-group"> 
                        <label for="">STATE OF ORIGIN:</label>  
                        <input type="text" name="" placeholder="enter state of origin" class="form-control"> 
                            <!-- <select name='dropbox' class="form-control">
                                <option value='ap' >Kaduna</option>
                                <option value='tml' >Kano</option>
                                <option value='tml' >Katsina</option>
                                <option value='tml' >Zamfara</option>
                                <option value='tml' >Jigawa</option>
                                <option value="tml">kebbi</option>
                                <option value="tml">Lagos</option>
                            </select> -->
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group"> 
                        <label for="">LOCAL GOVERNMENT: </label> 
                        <input type="text" name="" placeholder="enter local government" class="form-control">  
                    </div>
                </div>
            
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group"> 
                        <label for="">GENDER:</label>
                     <input type="text" name="" placeholder="enter gender" class="form-control">  
                    </div>
                        <!-- <span> <input type='radio' name='gender' value='0'>Male
                        <input type='radio' name='gender' value='1' >Female</span><br></br> -->

                
                </div>
                <div class="col-4">
                    <div class="form-group"> 
                        <label for="">MARRIEG STATUS:</label>  
                        <input type="text" name="" placeholder="enter marrital status" class="form-control">  
                    </div>
                        <!-- <span> <input type='radio' name="status" value='0'>Single
                        <input type='radio' name="status" value='1' >Married
                        <input type='radio' name="status" value='2'>Divorced</span><br><br> -->
                </div>
                <div class="col-4">
                    <div class="form-group"> 
                        <label for="">OCCUPATION: </label> 
                        <input type="text" name="" placeholder="enter occupation" class="form-control">  
                    </div>
                </div>
            
            </div>
            
            <div class="form-group">
                <input type="submit" name="submit" value="Register" class="btn btn-info ">

            </div>
            <div class="form-group">
                <input type="reset">

            </div>
    
    </form>
        


</div>
</body>
</html>