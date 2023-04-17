<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <title>HP-AOPA</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
</head>
<body>
<main>
  <div class="content padding-bottom">
    <div class="container">
      <header>
        <div class="masthead row">
          <div class="large-logo col-8 col-s-8">
            <img id="masthead" src="images/masthead-hand.jpg" alt="Reinvent how you develop product">  
            <p class="copy">©Copyright 2018 HP Development Company LP.<br/>
            Data courtesy of Invent Medical.</p> 
          </div>
          <div class="small-logo col-4">
            <div class="row margin-top-20">
              <div class="hp-logo col-3 col-s-3">
                <img src="images/logo.jpg" alt="HP-Logo">
              </div>
            <div class="elogo col-9 col-s-3">
              <img src="images/evok3d.jpg" alt="Evok3d-Logo"> 
            </div>
          </div>
          <div class="row">
            <div class="hp-para col-12">
              <p class="title">Reinvent how you
              develop product.</p>
              <p>And how you manufacture in this <br/> 
              new digital age faster and with more 
              compelling economics.<br/> <br/> <span>hp.com/go/3DPrint</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </header>
<!--HP 3D Printing-->
      <div class="main-content">
        <section>
          <div class="row">
            <div class="col-12 col-s-12">
              <div class="header-title padding-top">
                <h1>HP 3D PRINTING SPECIALIST CONSULTATION</h1>
                <p class="padding padding-bottom">Join us at AOPA Congress 2018 and get expert guidance on how you can align the HP Jet Fusion 3D print technology with needs of healthcare professionals. Send your stl files prior to the session to have the parts printed for the consultation.</p>
              </div>
              <p class="small padding"><span>*</span>Mandatory fields</p>
            </div>
          </div>

          <div class="row">
            <!-- progressbar -->
            <div class="col-12">
            <ul class="section--progressbar clearfix">
              <li class="step-one is-active">ABOUT YOU</li>
              <li class="step-two">DATE AND TIME</li>
              <li class="step-three">UPLOAD YOUR FILES</li>
            </ul>
            </div>
          </div>
        </section>

        <section>
          <!-- Registeration Table -->
          <div class="register">
            <div class="acc row"> 
              <div class="col-12 col-s-12">
              <!-- Accordion -->           
                <button class="accordion" id="acc1">About You</button>
                  <div class="panel padding"></div>
              </div>
              <div class="col-12 col-s-12">
                <button class="accordion" id="acc2">Choose Date and Time</button>
                  <div class="panel padding"></div>
              </div>
              <div class="col-12 col-s-12">
                <button class="accordion" id="acc3">Upload Your Files</button>
                  <div class="panel"></div>  
              </div>
            </div>
            <div class="row">
              <div class="main col-12 col-s-12">
                <form action="submit.php" method="post" enctype="multipart/form-data">   
                  <div class="row hole" id="about">
                    <!-- About You --> 
                    <div class="row">
                    <h3 class="head">Please enter your details</h3>
                    </div>
                    <div class="row body">
                      <div class="row">
                        <div class="col-6 col-s-8">
                          <label for="title">Title<span>*</span></label><br/>
                          <select id="title" name="title">
                          <option value=""></option>
                          <option value="Mr." >Mr.</option>     
                          <option value="Mrs.">Mrs.</option>
                          <option value="Mr.s">Mr.s</option>
                          <option value="Dr.">Dr.</option>
                          </select>
                        </div>
                        <div class="col-6 col-s-8">
                          <span class="icons" id="icon-title">
                            <i class="material-icons">warning</i>
                          </span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-s-8">
                          <label for="firstname">First Name<span>*</span></label><br/>
                          <input type="text" name="first-name" id="firstname" required="required">
                        </div>
                        <div class="col-6 col-s-8">
                          <span class="icons" id="icon-first" >
                            <i class="material-icons">warning</i>                    
                          </span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-s-8">
                          <label for="lastname">Last Name<span>*</span></label><br/>
                          <input type="text" name="last-name" id="lastname" required="required">
                        </div>
                        <div class="col-6 col-s-8">
                          <span class="icons" id="icon-last">
                            <i class="material-icons">warning</i>           
                          </span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-s-8">
                          <label for="company">Company<span>*</span></label><br/>
                          <input type="text" name="company" id="company" required="required">
                        </div>
                        <div class="col-6 col-s-8">
                          <span class="icons" id="icon-company">
                            <i class="material-icons">warning</i>
                          </span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-s-8">
                          <label for="position">Positon<span>*</span></label><br/>
                          <input type="text" name="position" id="position" required="required">
                        </div>
                        <div class="col-6 col-s-8">
                          <span class="icons" id="icon-position">
                            <i class="material-icons">warning</i>          
                          </span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-s-8">
                          <label for="department">Department<span>*</span></label><br/>
                          <input type="text" name="department" id="department" required="required">
                        </div>
                        <div class="col-6 col-s-8">
                          <span class="icons" id="icon-department">
                            <i class="material-icons">warning</i>            
                          </span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-s-8">
                          <label for="email">Email<span>*</span></label><br/>
                          <input type="email" name="email" id="email" required="required">
                        </div>
                        <div class="col-6 col-s-8">
                          <span class="icons" id="icon-email">
                            <i class="material-icons">warning</i>       
                          </span>
                        </div>
                      </div>
                    </div> 
                    <div class="row foot col-12 col-s-8">
                      <button class="btn btn-primary float-right" type="button" id="continue1" onclick="aboutValidate()">CONTINUE</button>
                    </div> 
                  </div>      
                              
                  <div class="row hole" id="date">
                    <!-- Choose Date and Time -->  
                    <div class="row">
                      <p class="head">Choose a date and time</p>
                      <p>Note:</p>
                      <ul>
                        <li>Select only one preferred time slot</li>
                        <li>We will notify you of your confirmed slot separately</li>
                      </ul>
                    </div>
                    <div class="row body">
                      <div class="row">
                        <div class="col-6 col-s-8">      
                          <label>Thursday, 4th October 2018</label><br/>
                          <select id="selection1" name="selection1" class="selection" >
                            <option ></option>
                            <option value="10:00" >10:00</option>     
                            <option value="12:00">12:00</option>
                            <option value="3:00">3:00</option>
                          </select>
                        </div> 
                        <div class="col-6 col-s-8">         
                          <span class="icons" id="icon1">
                            <i class="material-icons">
                              warning
                            </i>
                          </span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-s-8">             
                          <label>Friday, 5th October 2018</label><br/>
                          <select id="selection2" name="selection2" class="selection">
                            <option  ></option>
                            <option value="10:00" >10:00</option>     
                            <option value="12:00">12:00</option>
                            <option value="3:00">3:00</option>
                          </select>
                        </div>
                        <div class="col-6 col-s-8">
                          <span class="icons" id="icon2">
                            <i class="material-icons">
                              warning
                              </i>
                          </span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-s-8">
                          <label >Saturday, 6th October 2018</label><br/>
                          <select id="selection3" name="selection3" class="selection">
                            <option  ></option>
                            <option value="10:00" >10:00</option>     
                            <option value="12:00">12:00</option>
                            <option value="3:00">3:00</option>
                          </select>
                        </div>
                        <div class="col-6 col-s-8">      
                          <span class="icons" id="icon3">
                            <i class="material-icons">
                              warning
                              </i>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="row foot col-12 col-s-8">
                      <button class="btn btn-primary float-right" type="button" id="continue2" onclick="dateTime()">CONTINUE</button>  
                    </div>        
                  </div>             

                  <div class="row hole" id="upload">
                    <!-- Upload Your Files -->
                    <div class="row">
                      <p class="head col-12 col-s-8">Upload your STL files</p>
                    </div>
                    <div class="row">
                      <div class="col-12 col-s-8">
                        <p>Note:</p>
                        <ul>
                          <li>Offer for 3D printed parts are subjected to the discretion of EVOK3D and HP upon review of the design file/files</li>
                          <li>Maximum of 3 files and 50MB per file</li>
                        </ul> 
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <input type="file" class="upload-mask" name="fileupload" id="fileupload" accept="image/*" multiple="">
                      </div>
                    </div>
                    <embed type="image/svg+xml" src="images/cancel-01.svg"/>
                    <span id="custom-text">
                    </span><br/>
                    <embed type="image/svg+xml" src="images/cancel-01.svg"/>
                    <span id="custom-text2">
                    </span>
                    <div class="row foot col-12 col-s-8">
                      <button class="btn btn-primary float-right" type="button" id="continue3" onclick="uploadValidate()">CONTINUE</button>
                    </div>
                  </div>
                  <div class="row margin-top" align="center">
                  <button class="btn btn-submit" type="submit" id="submit">SUBMIT</button>
                  </div>
                </form> 
              </div>   
            </div>              
          </div>
        </section>   
      </div>
      <div class="confirm">
        <div class="col-12 margin-top padding-top" align="center">
          <img src="images/calendar-confirmed.png" alt="Calendar Confirmed">   
          <p>Thank you, your booking is confirmed.<br/>
          A confirmation email has been sent to you.</p> 
          <h2>Thursday, 4th October @ 14:00</h2>
          <span>AOPA Congress 2018</span><br/>
          <span>Booth #10</span><br/>
          <span>The Star Gold Coast,</span><br/>
          <span>1 Casino Dr, Broadbeach QLD 4218</span>        
        </div>
        <div class="col-12 margin-top" align="center">
          <button class="btn btn-download" type="download" id="download">Download To YOUR CALENDAR</button>
        </div>
      </div>
    </div>
  </div>
</main>

<script src="js/jquery.min.js"></script>
<script type="application/javascript" src="js/section.js"></script>
</body>
</html>