<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>number</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="css/number.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-brand">
                <h2><span class="las la-mobile">Phone</span></h2>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="Dashboard.php"><span class="las la-igloo">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="Upload.php"><span class="las la-phone-square">Upload Phone Numbers</span></a>
                    </li>

                    <li>
                        <a href="numbers.php"  class="active"><span class="las la-address-book">Number list</span></a>
                    </li>
                    <li>
                        <a href="airtime.php"><span class="las la-clone">Configure Airtime Provider</span></a>
                    </li>
                    <li>
                        <a href="message.php"><span class="las la-comments">Configure Message to Beneficiaries</span></a>
                    </li>
                    <li>
                        <a href="send.php"><span class="las la-comments">Send Airtime</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <h2>
                    <label for="" class="">
                        <span class="las la-bars"></span>
                    </label>
                    Dashboard
                </h2>
                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="search here" />
                </div>
                <div class="user-wrapper">
                    <img src="img/img2.jpg" width="40px" height="40px">
                    <div>
                    <h4>Admin</h4>
                    <small>Super admin</small>
                </div>
                </div>
            </header>
            <main>
            
                    <div class="cards">
                    <div class="card-single">
                         
                        <h1>Event</h1><br>
                         
                      </div>
                </div>
                    <div class="cards">
                    
                    
            
            <table>
               <tr>
                    <th>S/N</th>
                     <th>Full Name</th>
                     <th>Number</th>
                     <th>Valid?</th>
                     <th>Country</th>
                    
                   
                
                </tr>
                        
             </table>
               
                        
            </div>
            </main>
        </div>
    </body>
</html>