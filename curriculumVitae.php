<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editable CV of Dev Wizard</title>
    <style>
        /* General Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f9fc;
            color: #333;
            line-height: 1.6;
        }

        .cv-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
            gap: 20px;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 30%;
            padding: 20px;
            background-color: #1b3b6f;
            color: #fff;
            border-radius: 8px;
        }

        .sidebar h2, .sidebar h3 {
            color: #ffd700;
            font-weight: bold;
        }

        .sidebar h3 {
            font-size: 1.1em;
            margin-top: 20px;
            color: #ffdd44;
        }

/* Summary Section Heading */
.content h2 {
    border-bottom: 3px solid #003366; /* Dark Blue line under h2 */
    padding-bottom: 10px; /* Space between text and line */
    margin-bottom: 15px;
}

/* Work Experience, Education, and References Section Headings */
.content h3 {
    border-bottom: 3px solid #003366; /* Dark Blue line under h3 */
    padding-bottom: 8px; /* Space between text and line */
    margin-bottom: 10px;
}

        .sidebar input, .sidebar textarea, .content input, .content textarea {
            width: 100%;
            font-size: 0.95em;
            padding: 10px;
            border: none;
            border-radius: 4px;
            margin-bottom: 8px;
            background-color: #f3f4f8; 
            /* Default background color */
        }

        /* Make text boxes match their container's background */
        .sidebar input, .sidebar textarea {
            background-color: #1b3b6f; /* Sidebar background */
            color: whitesmoke; /* Text color to match */
        }

        .content input, .content textarea {
            background-color: #ffffff; /* Main content background */
            color: #333; /* Text color to match */
        }

        .sidebar ul {
            list-style-type: none;
            padding-left: 0;
            margin-top: 10px;
        }

        /* Hide for PDF section (elements you want to hide in PDF) */
        .hide-for-pdf input, .hide-for-pdf textarea, .hide-for-pdf button {
            display: none;
        }

        .content {
            width: 65%;
        }

        .content h2, .content h3 {
            color: #1b3b6f;
            font-weight: bold;
        }

        .content h3 {
            font-size: 1.3em;
            margin-bottom: 10px;
        }

        .job, .education, .reference {
            margin-bottom: 20px;
        }

        .job h4, .education h4 {
            font-size: 1.1em;
            color: #333;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Floating Sidebar for buttons */
        .floating-sidebar {
            position: fixed;
            right: 20px;
            top: 20px;
            background-color: #1b3b6f;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 10;
            cursor: grab;
        }

        .floating-sidebar button {
            background-color: #ffd700;
            color: #1b3b6f;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .floating-sidebar button:hover {
            background-color: #ffdd44;
        }

        /* Color picker styling */
        .color-picker-container {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            z-index: 11;
            cursor: grab;
        }

        .color-picker-container input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php
// Personal Information (Default values)
$name = "Katlego    van two  ";
$contactEmail = "wizarddev@gmail.com";
$contactPhone = "012108895";
$idNumber = "0000000000000";
$dob = "01/01/2024";
$location = "South Africa";
$summary = "Passionate full stack developer with expertise in both front-end and back-end technologies...";
?>

<div class="cv-container" id="cv">
    <!-- Sidebar for Personal Information -->
    <div class="sidebar">
        <h3><b><input type="text"  value="<?php echo $name; ?>" /></h3></b>
        <p><b>Residential Address:</b><input type="text" style="color:#;" value="<?php echo $location; ?>" /></p>
        <p><b>Email Address:</b> <input type="text" value="<?php echo $contactEmail; ?>" /></p>
        <p><b>Phone Number: </b><input type="text" value="<?php echo $contactPhone; ?>" /></p>
        <p><b>Identity Number:</b> <input type="text" value="<?php echo $idNumber; ?>" /></p>
        <p><b>Date of Birth:</b> <input type="text" value="<?php echo $dob; ?>" /></p>

        <!-- Skills -->
        <h3>Skills</h3>
        <ul id="skills-list">
            <li><input type="text" placeholder="Skill" /></li>
        </ul>
    </div>

    <!-- Main Content Area -->
    <div class="content">
        <!-- Summary -->
        <div class="section">
            <h2>Summary</h2>
            <textarea rows="3"><?php echo $summary; ?></textarea>
        </div>

        <!-- Work Experience -->
        <div class="section">
            <h3>Work Experience</h3>
            <div class="job">
                <h4><input type="text" placeholder="Position" /> - <input type="text" placeholder="Company" /></h4>
                <p><input type="text" placeholder="Start Date" /> - <input type="text" placeholder="End Date" /></p>
                <textarea rows="3" placeholder="Description of responsibilities..."></textarea>
            </div>
        </div>

        <!-- Education -->
        <div class="section">
            <h3>Education</h3>
            <div id="education-list">
                <div class="education">
                    <h4><input type="text" placeholder="Degree" />, <input type="text" placeholder="Institution" /></h4>
                    <p>Graduation Year: <input type="text" placeholder="Year" /></p>
                </div>
            </div>
        </div>

        <!-- References -->
        <div class="section">
            <h3>References</h3>
            <div id="references-list">
                <div class="reference">
                    <p><strong><input type="text" placeholder="Reference Name" /></strong>, <input type="text" placeholder="Company" /></p>
                    <p><input type="text" placeholder="Contact Information" /></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Floating Sidebar for buttons -->
<div class="floating-sidebar" id="floating-sidebar">
    <button class="add-button" onclick="addSkill()">Add Skills +</button>
    <button class="add-button" onclick="addJob()">Add  Jobs +</button>
    <button class="add-button" onclick="addEducation()">Add Education +</button>
    <button class="add-button" onclick="addReference()">Add Reference +</button>
    <button class="add-button" onclick="downloadPDF()">Download as PDF</button>
</div>

<!-- Color Picker for dynamic changes -->
<div class="color-picker-container" id="color-picker-container">
    <label>Background Color:</label>
    <input type="color" id="background-color" value="#ffffff" />
    
    <label>Text Color:</label>
    <input type="color" id="text-color" value="#333333" />
    
    <label>Button Color:</label>
    <input type="color" id="button-color" value="#ffd700" />
    
    <label>Sidebar Color:</label>
    <input type="color" id="sidebar-color" value="#1b3b6f" />
    
    <button onclick="changeColor()">Apply Colors</button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

<script>
    // JavaScript functions to dynamically add new fields
    function addSkill() {
        const skillsList = document.getElementById("skills-list");
        const newSkill = document.createElement("li");
        newSkill.innerHTML = '<input type="text" placeholder="Skill" />';
        skillsList.appendChild(newSkill);
    }

    function addJob() {
        const jobContainer = document.createElement("div");
        jobContainer.classList.add("job");
        jobContainer.innerHTML = `
            <h4><input type="text" placeholder="Position" /> - <input type="text" placeholder="Company" /></h4>
            <p><input type="text" placeholder="Start Date" /> - <input type="text" placeholder="End Date" /></p>
            <textarea rows="3" placeholder="Description of responsibilities..."></textarea>
        `;
        document.querySelector(".content .section h3").insertAdjacentElement('afterend', jobContainer);
    }

    function addEducation() {
        const educationList = document.getElementById("education-list");
        const newEducation = document.createElement("div");
        newEducation.classList.add("education");
        newEducation.innerHTML = `
            <h4><input type="text" placeholder="Degree" />, <input type="text" placeholder="Institution" /></h4>
            <p>Graduation Year: <input type="text" placeholder="Year" /></p>
        `;
        educationList.appendChild(newEducation);
    }

    function addReference() {
        const referencesList = document.getElementById("references-list");
        const newReference = document.createElement("div");
        newReference.classList.add("reference");
        newReference.innerHTML = `
            <p><strong><input type="text" placeholder="Reference Name" /></strong>, <input type="text" placeholder="Company" /></p>
            <p><input type="text" placeholder="Contact Information" /></p>
        `;
        referencesList.appendChild(newReference);
    }

    function downloadPDF() {
        const element = document.getElementById('cv');
        html2pdf().from(element).save('CV_Dev_wizard.pdf');
    }

    // Function to apply colors from color picker
    function changeColor() {
        document.body.style.backgroundColor = document.getElementById('background-color').value;
        document.body.style.color = document.getElementById('text-color').value;
        const buttons = document.querySelectorAll(".floating-sidebar button");
        buttons.forEach(button => {
            button.style.backgroundColor = document.getElementById('button-color').value;
        });
        document.querySelector(".sidebar").style.backgroundColor = document.getElementById('sidebar-color').value;
    }

    // Draggable functionality for both sidebar and color picker
    function makeDraggable(element) {
        let isMouseDown = false;
        let offsetX, offsetY;

        element.addEventListener('mousedown', (e) => {
            isMouseDown = true;
            offsetX = e.clientX - element.getBoundingClientRect().left;
            offsetY = e.clientY - element.getBoundingClientRect().top;
            element.style.cursor = 'grabbing';
        });

        document.addEventListener('mousemove', (e) => {
            if (isMouseDown) {
                const x = e.clientX - offsetX;
                const y = e.clientY - offsetY;
                element.style.left = `${x}px`;
                element.style.top = `${y}px`;
            }
        });

        document.addEventListener('mouseup', () => {
            isMouseDown = false;
            element.style.cursor = 'grab';
        });

        // For mobile (touch events)
        element.addEventListener('touchstart', (e) => {
            isMouseDown = true;
            const touch = e.touches[0];
            offsetX = touch.clientX - element.getBoundingClientRect().left;
            offsetY = touch.clientY - element.getBoundingClientRect().top;
            element.style.cursor = 'grabbing';
        });

        document.addEventListener('touchmove', (e) => {
            if (isMouseDown) {
                const touch = e.touches[0];
                const x = touch.clientX - offsetX;
                const y = touch.clientY - offsetY;
                element.style.left = `${x}px`;
                element.style.top = `${y}px`;
            }
        });

        document.addEventListener('touchend', () => {
            isMouseDown = false;
            element.style.cursor = 'grab';
        });
    }

    // Make both floating sidebar and color picker draggable
    window.onload = function () {
        makeDraggable(document.getElementById("floating-sidebar"));
        makeDraggable(document.getElementById("color-picker-container"));
    }
</script>

</body>
</html>
