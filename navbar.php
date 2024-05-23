<nav class="navbar navbar-expand-lg fixed-top p-0 navbar-dark ">
  <div class="container">
    <a class="navbar-brand text-dark fs-3" href="index.php">TechLinx</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-dark active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#about">About</a>
        </li>
        <li class="nav-item dropdown has-megamenu">
            <a class="nav-link text-dark dropdown-toggle" href="#" data-bs-toggle="dropdown"> Solutions  </a>
            <div class="dropdown-menu megamenu rounded-5  border-0 shadow-sm" role="menu">
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="my-2 shadow-sm role-bg  rounded-3 bg-role  ">
                                    <div class=" py-2 pt-3 px-3 rounded-3" onmouseover="showLinks('roles')">
                                        <h6 class="text-dark">Role</h6>
                                    </div>
                                    
                                    <div id="linksContainerRoles" class="text-white rounded-3 px-3"></div>
                                    
                                </div>
                            </div>
                            <!--role-->
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="my-2 role-bg  shadow-sm rounded-3 industry-bg  ">
                                    <div class=" py-2 pt-3 px-3 rounded-3" onmouseover="showLinks('industry')">
                                        <h6 class="text-dark">Industry</h6>
                                    </div>
                                    
                                    <div id="linksContainerIndustry" class="text-white rounded-3 px-3"></div>
                                    
                                </div>
                            </div>
                            <!--Industry-->
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="my-2 role-bg  shadow-sm rounded-3 industry-bg  ">
                                    <div class=" py-2 pt-3 px-3 rounded-3" onmouseover="showLinks('technology')">
                                        <h6 class="text-dark">Technology</h6>
                                    </div>
                                    
                                    <div id="linksContainerTechnology" class="text-white rounded-3 px-3"></div>
                                    
                                </div>
                            </div>
                            <!--technology-->
                           
                            <!--resourses-->
                        </div>
                    </div>
                </section>
            </div> <!-- dropdown-mega-menu.// -->
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-dark " >Events</a>
        </li>
        <li class="nav-item mt-2 mx-2">
            <a href="contact.php" class=" ">Contact Us</a>
          </li>
      </ul>
      <div class="d-flex">
        <div>
            <a target="_blank"  href="https://www.facebook.com/"><i class="fa  px-2 fa-facebook text-dark   p-1 rounded-pill" aria-hidden="true"></i></a>
        </div>
        <div>
            <a target="_blank"  href="https://www.instagram.com/"><i class="fa  px-2 fa-instagram text-dark   p-1 rounded-pill" aria-hidden="true"></i></a>
        </div>
        <div>
            <a target="_blank"  href="https://in.linkedin.com/"><i class="fa  px-2 fa-linkedin text-dark   p-1 rounded-pill" aria-hidden="true"></i></a>
        </div>
        <div>
            <a target="_blank"  href="https://x.com/?lang=en">
                <img src="src/images/xIcons.png" class="img-fluid" style="width: 14PX;">
            </a>
        </div>
        <div>
            <a target="_blank"  href="https://www.youtube.com/"><i class="fa  px-2 fa-youtube text-dark   p-1 rounded-pill" aria-hidden="true"></i></a>
        </div>
      </div>
  </div>
</nav>
<script>
   var timeout; // Variable to hold timeout reference
var activeContainerId; // Variable to store the ID of the active links container

function showLinks(category) {
    var linksContainer;
    var links;
    var linkTexts;

    switch (category) {
        case 'roles':
            linksContainer = document.getElementById("linksContainerRoles");
            links = ["recruiters.php", "talent.php", "hiringManager.php", "talent-acquisition.php", "talent-management.php", "hris.php"];
            linkTexts = ["Recruiters", "Talent Marketers", "Hiring Managers", "Talent Acquisition", "Talent Management", "HRIS"];
            break;
        case 'industry':
            linksContainer = document.getElementById("linksContainerIndustry");
            links = ["healthcare.php", "finance.php", "manufacturing.php", "retail.php", "transport.php", "technology.php"];
            linkTexts = ["Healthcare", "Finance", "Manufacturing ", "Retail & Hospitality ", "Transportation & Logistics", "Technology & IT"];
            break;
        case 'technology':
            linksContainer = document.getElementById("linksContainerTechnology");
            links = ["skills.php", "intelligence.php", "genrativeAi.php"];
            linkTexts = ["Skills", "Intelligence", "Genrative AI "];
            break;
       
        // Add cases for Technology and Resource if needed
    }

    // Hide the previously active container if exists
    if (activeContainerId && activeContainerId !== linksContainer.id) {
        var activeContainer = document.getElementById(activeContainerId);
        activeContainer.style.display = "none";
    }

    var linksHTML = ""; // Initialize links HTML string
    for (var i = 0; i < links.length; i++) {
        linksHTML += "<a  href='" + links[i] + "' style='display: block; padding: 5px 0;'>" + linkTexts[i] + "</a>";
    }
    linksContainer.innerHTML = linksHTML; // Set new links content
    linksContainer.style.display = "block"; // Show the links container

    // Set the active container ID
    activeContainerId = linksContainer.id;
}

function hideLinks(containerId) {
    timeout = setTimeout(function() {
        var container = document.getElementById(containerId);
        if (!container.matches(':hover')) { // Check if the mouse is not hovering over the container
            container.style.display = "none";
        }
    }, 200); // Adjust delay as needed (200 milliseconds in this example)
}

function cancelHide() {
    clearTimeout(timeout);
}

// Hide the links container when mouse leaves both the dropdown area and the links container itself
document.querySelectorAll('.shadow-sm').forEach(function(item) {
    item.addEventListener('mouseleave', function() {
        var linksContainer = this.nextElementSibling;
        hideLinks(linksContainer.id);
    });

    item.nextElementSibling.addEventListener('mouseleave', function() {
        hideLinks(this.id);
    });
});

</script>
<script>
    window.addEventListener('scroll', function() {
        var navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) { // Change 50 to your desired scroll position
            navbar.classList.add('bg-light');
        } else {
            navbar.classList.remove('bg-light');
        }
    });
</script>


