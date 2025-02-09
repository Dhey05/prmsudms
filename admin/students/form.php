<script type="text/javascript">
function updateCourse(value) {
  var courseSelect = document.getElementById("course");
  courseSelect.options.length = 0;

  if (value == "College of Accountancy and Business Administration") {
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Accountancy");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Accounting and Information System");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Business Administration major in Marketing");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Business Administration major in Financial Management");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Business Administration major in Human Resource Development Management");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Public Administration");
  } 
  else if (value == "College of Arts and Sciences") {
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Biology");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Psycology");
  }
  else if (value == "College of Communication and Information Technology") {
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Computer Science");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Information Technology");
  }
  else if (value == "College of Teacher Education") {
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Secondary Education major in English Education");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Secondary Education major in Filipino Education");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Secondary Education major in Mathematics Education");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Secondary Education major in Science Education");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Secondary Education major in Social Studies Education");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Elementary Education");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Physical Education");
    courseSelect.options[courseSelect.options.length] = new Option("Certificate of Professional Education");
  }
  else if (value == "College of Engineering") {
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Civil Engineering");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Electrical Engineering");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Mechanical Engineering");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Computer Engineering");
  }
  else if (value == "College of Industrial Technology") {
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Technology and Livelihood Education");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Technical Vocational Teachers Education major in Computer Programming");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Technical Vocational Teachers Education major in Drafting");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Technical Vocational Teachers Education major in Mechanical");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Technical Vocational Teachers Education major in Electrical")
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Technical Vocational Teachers Education major in Food and Service Management Technology");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Technical Vocational Teachers Education major in Automotive");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Technical Vocational Teachers Education major in Electronics Technology");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Industrial Technology major in Automotive");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Industrial Technology major in Computer");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Industrial Technology major in Drafting");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Industrial Technology major in Electrical");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Industrial Technology major in Electronics");;
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Industrial Technology major in Food");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Industrial Technology major in Machine Shop");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Industrial Technology major in Furniture and Cabinet Making");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Industrial Technology major in Mechanical");
  }
  else if (value == "College of Agriculture and Forestry") {
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Environmental Science", "BSEE");
  }
  else if (value == "College of Nursing") {
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Nursing", "BSEE");
  }
  else if (value == "College of Tourism and Hospitality Management") {
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Hospitality Management");
    courseSelect.options[courseSelect.options.length] = new Option("Bachelor of Science in Tourism Management");
  }
}
</script>
<script src="<?php echo "/script/form.js" ?>"></script>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Update student details</h3>
    </div>

    <div class="card-body">
        <form id="student-entry-form">
            <div class="details">
                <div class="section">
                    <h3 class="m-b">School Details</h3>
                    <div class="row">
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Student Number <b class="required">*</b></div>
                                <input name="code" value="<?php echo $student_data->code ?? "" ?>" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Course <b class="required">*</b></span></div>
                                <select name="course" value="<?php echo $student_data->course ?>">
                                    <?php
                                        foreach($courses as $course) {
                                            $selected = ($student_data->course ?? "") == $course ? 'selected' : '';
                                            echo "<option $selected>$course</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Department <b class="required">*</b></span></div>
                                <input name="department" value="<?php echo $student_data->department ?? "" ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <h3 class="m-b">Personal Information</h3>
                    <div class="row">
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>First Name <b class="required">*</b></span></div>
                                <input name="firstname" value="<?php echo $student_data->firstname ?? "" ?>" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Middle Name</span></div>
                                <input name="middlename" class="not-required" value="<?php echo $student_data->middlename ?? "" ?>" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Last Name <b class="required">*</b></span></div>
                                <input name="lastname" value="<?php echo $student_data->lastname ?? "" ?>" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Extension</span></div>
                                <input name="extension" class="not-required" value="<?php echo $student_data->extension ?? "" ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Birthday <b class="required">*</b></span></div>
                                <input name="birthdate" value="<?php echo $student_data->birthdate ?? "" ?>" type="date" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Age <b class="required">*</b></span></div>
                                <div class="static"><?php echo $age ?? "" ?></div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Sex <b class="required">*</b></span></div>
                                <select name="gender">
                                    <option <?php echo ($student_data->gender ?? "") == "Male" ? "selected" : "" ?>>Male
                                    </option>
                                    <option <?php echo ($student_data->gender ?? "") == "Female" ? "selected" : "" ?>>Female
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Religion <b class="required">*</b></span></div>
                                <input name="religion" value="<?php echo $student_data->religion ?? "" ?>" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Contact Number <b class="required">*</b></span></div>
                                <input name="contact" value="<?php echo $student_data->contact ?? "" ?>" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Email <b class="required">*</b></span></div>
                                <input name="email" value="<?php echo $student_data->email ?? "" ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Address <b class="required">*</b></span></div>
                                <textarea name="address"><?php echo $student_data->address ?? "" ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <h3 class="m-b">Emergency Details</h3>
                    <div class="row">
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Name <b class="required">*</b></span></div>
                                <input name="emergency_name" value="<?php echo $student_data->emergency_name ?? "" ?>" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Contact Number <b class="required">*</b></span></div>
                                <input name="emergency_contact"
                                    value="<?php echo $student_data->emergency_contact ?? "" ?>" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Relationship <b class="required">*</b></span></div>
                                <input name="emergency_relation"
                                    value="<?php echo $student_data->emergency_relation ?? "" ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-wrapper">
                                <div><span>Address <b class="required">*</b></span></div>
                                <textarea
                                    name="emergency_address"><?php echo $student_data->emergency_address ?? "" ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-wrapper">
                    <div><span>Status <b class="required">*</b></span></div>
                    <select name="status">
                        <option value="1" <?php echo $student_data->status ?? "" == "1" ? "selected" : "" ?>>Active</option>
                        <option value="0" <?php echo $student_data->status ?? "" == "0" ? "selected" : ""  ?>>Inactive
                        </option>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $student_id ?>" />
                <div class="justify-content m-t">
                    <button class="btn btn-default m-r" type="submit">Save</button>
                    <a class="btn btn-secondary" href="<?php echo $SITE_NAME ?>/admin/student.php">Cancel</a>
                </div>
            </div>
        </form>
    </div>