<html>
    <title>CV maker</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </head>
<body>
<script src="script.js"></script>

<!--navbar-->
<nav class="navbar navbar-expand-sm bg-black navbar-dark">
    <div class="container-fluid">
        <a href="main_page.php" class="navbar-brand nav-link">Resume Generator</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="sample.php" class="nav-link" >Sample</a>
                </li>
                <li class="nav-item">
                    <a href="make_your_own.php" class="nav-link" >Make your own</a>
                </li>
                <li class="nav-item">
                    <a href="crud/create.php" class="nav-link">My Info</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">Sign Out</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" id="cv-form">
    <h1 class="text-center my-2"> Resume Generator</h1>

    <div class="row ">
<!--        first column-->

        <div class="col-md-6">
            <h3 class="text-center">Personal Information</h3>
            <div class="form-group">
                <lable for="nameField">Your Name</lable>
                <input type="text" class="form-control" id="nameField" placeholder="Enter here">
            </div>

            <div class="form-group mt-2">
                <lable for="contactField"> Your Contact</lable>
                <input type="text" class="form-control" id="contactField" placeholder="Enter here">
            </div>

            <div class="form-group mt-2">
                <lable for="addressField"> Your Address</lable>
                <textarea class="form-control" id="addressField" placeholder="Enter here" ></textarea>
            </div>

            <div class="form-group mt-2">
                <label>Select your Photo</label>
                <input id="imgField" type="file" class="form-control">
            </div>


            <h4 class="text-secondary mt-2">Links</h4>
            <div class="form-group ">
                <lable for="fbField"> Facebook</lable>
                <input type="text" class="form-control" id="fbField" placeholder="Enter here">
            </div>

            <div class="form-group mt-2">
                <lable for="instaField"> Instagram</lable>
                <input type="text" class="form-control" id="instaField" placeholder="Enter here">
            </div>

            <div class="form-group mt-2">
                <lable for="ldField"> LinkedIn</lable>
                <input type="text" class="form-control" id="linkedField" placeholder="Enter here">
            </div>
        </div>


<!--        //second column-->
        <div class="col-md-6">
            <h3 class="text-center">Professional Information</h3>

            <div class="form-group mt-2">
                <lable for="addressField"> Objective</lable>
                <textarea class="form-control" id="objectiveField" placeholder="Enter here" rows="5" ></textarea>
            </div>

            <div class="form-group mt-2" id="we">
                <lable for="addressField"> Work experience</lable>
                <textarea class="form-control weField"  placeholder="Enter here" rows="3" ></textarea>

                <div class="container text-center" id="weAddButton">
                    <button onclick="addNewWeField()" class="btn btn-primary mt-2" >Add</button>
                </div>
            </div>



            <div class="form-group mt-2" id="aq">
                <lable for="addressField">Academic Qualification</lable>
                <textarea class="form-control aqField" placeholder="Enter here" rows="3" ></textarea>
                <div class="container text-center" id="aqAddButton">
                    <button onclick="addNewAqField()" class="btn btn-primary mt-2">Add</button>
                </div>
            </div>
            <div class="container text-center mt-3 ">
                <button onclick="generateCV()" class="btn btn-dark btn-lg">Generate CV</button>
            </div>
        </div>
    </div>
</div>

<!--cv template-->
<div class="container" id="cv-template">
    <div class="row">
        <div class="col-md-4 text-center py-5 bg-dark text-light">
<!--            first col-->
            <img id="imageT" src="download.png" class="image-fluid myimg">

            <div class="container ">
                <p id="nameT1" class="mt-3">Aarnov Adhikari</p>
                <p id="contactT">+9808682424,+9846249505</p>
                <p id="addressT">252, Budhanilkantha Sadak, Kathmandu</p>

                <hr>

                <p><a id="fbT" href="#1">https://www.facebook.com/aarnov.adhikari</a></p>
                <p><a id="instaT" href="#1">https://www.instagram.com/aar_noob/?hl=en</a></p>
                <p><a id="linkedT" href="#1">https://www.linkedin.com/aar_noob/?hl=en</a></p>
            </div>
        </div>


        <div class="col-md-8 py-5">
<!--            second col-->
            <h1 id="nameT2" class="text-center" style=" font-weight: 900;">Aarnov Adhikari</h1>


            <!--objective card-->
            <div class="card mt-4">
                <div class="card-header bg-dark text-light">
                    <h3>Objective</h3>
                </div>
                <div class="card-body">
                    <p id="objectiveT">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid animi cum facere
                        molestias nemo officiis quasi ratione sed veritatis. Adipisci alias commodi corporis culpa
                        dignissimos eaque error eveniet facere laborum nam optio quos repellendus saepe sed sequi
                        tempora vero, voluptatem? Architecto, beatae fuga nulla praesentium provident quisquam rerum
                        sit?</p>
                </div>
            </div>

            <!--work experience card-->

            <div class="card mt-4">
                <div class="card-header bg-dark text-light">
                    <h3>Work Experience</h3>
                </div>
                <div class="card-body text=small">
                    <ul id="weT">
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, saepe.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, saepe.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, saepe.</li>
                    </ul>
                </div>
            </div>

<!--academic qualification card-->
             <div class="card mt-4">
                <div class="card-header bg-dark text-light">
                    <h3>Academic Qualification</h3>
                </div>
                <div class="card-body text=small">
                    <ul id="aqT">
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, saepe.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, saepe.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, saepe.</li>
                    </ul>
                </div>
            </div>

            <div class="container py-4 text-center">
                <button onclick="printCV()" class="btn btn-dark btn-lg print" id="print">Print CV</button>
            </div>

        </div>
    </div>
</div>
</body>
</html>
