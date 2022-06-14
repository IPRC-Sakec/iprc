function isChecked(chk, sub1) {
    console.log(sub1);
    var myLayer = document.getElementById(sub1);
    if (chk.checked == true) {
        myLayer.disabled = false;
    } else {
        myLayer.disabled = true;
    };
}

var previewForm = document.getElementById("previewForm");
        // var previewForm1 = document.getElementById("previewForm1");
        var preview = document.getElementById("form");
        var previewbtn = document.getElementById("preview");
        previewForm.setAttribute("hidden", false);
        // previewForm1.setAttribute("hidden", false);


        document.querySelector("#preview").addEventListener("click", function() {
            if (preview.hasAttribute("hidden")) {
                preview.removeAttribute("hidden");
                previewForm.setAttribute("hidden", false);
                // previewForm1.setAttribute("hidden", false);
                previewbtn.innerHTML = 'Preview';
            } else {
                preview.setAttribute("hidden", false);
                previewForm.removeAttribute("hidden");
                // previewForm1.removeAttribute("hidden");
                previewbtn.innerHTML = 'Back';
            }
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = today.getFullYear();

            var date = document.getElementById("date");
            var date1 = document.getElementById("date1");
            var title = document.getElementById('title');
            var titlePreview = document.getElementById('titlePreview');
            var desc = document.getElementById('des');
            var descPreview = document.getElementById('descPreview');
            var len = document.getElementsByName('name_applicant[]').length;

            var table = document.getElementById('table');
            var last = document.getElementById('last');
            var last1 = document.getElementById('last1');
            var name = document.getElementsByName('name_applicant[]');
            var role = document.getElementsByName('role[]');

            var l2topic = document.getElementById('l2topic');
            l2topic.innerHTML = " On behalf of Shah & Anchor Kutchhi Engineering College, the institute does not have any objection on filing copyright for the work with title <b>" + title.value + "</b> by the following Shah & Anchor Kutchhi Engineering College faculty members and students ";

            today = dd + '/' + mm + '/' + yyyy;
            date.innerHTML = 'Date: ' + today;
            date1.innerHTML = 'Date: ' + today;
            titlePreview.innerHTML = '<b>Title Name</b> : ' + title.value;
            descPreview.innerHTML = '<b>Description</b> : ' + desc.value;

            tablevar = '';
            lastvar = "Thanking You.</br><ol>";
            lastvar1 = "<ol>";
            for (var i = 0; i < len; i++) {
                if (i == 0) {
                    tablevar += "<table><tr align='center'><th >Sr.No</th><th >Name</th><th>Role</th></tr>";
                }
                j = i + 1;
                tablevar += "<tr align='center'><td >" + j + "</td><td >" + name[i].value + "</td><td >" + role[i].value + "</td></tr>";
                lastvar += "<li>" + name[i].value + "</li>";
                lastvar1 += "<li>" + name[i].value + "</li>";
                if (i == len - 1) {
                    tablevar += "<tr align='center'><td >" + (j + 1) + "</td><td >Shah and Anchor Kutchhi Engineering College</td><td>Applicant</td></tr>";
                    lastvar += "</ol>";
                    lastvar1 += "</ol>";
                }
            }
            table.innerHTML = tablevar;
            last.innerHTML = lastvar;
            last1.innerHTML = lastvar1;
            document.getElementById('previewpdf1').value = document.getElementById('previewForm1').innerHTML;
            // window.print('previewpdf1');
            //document.getElementById('previewpdf2').value = document.getElementById('previewForm2').innerHTML;
            // console.log(document.getElementById('previewpdf').value.trim());
        })
        // add row
        let count = 0;
        $("#addRow").click(function() {
            // count++;
            var html = '';

            html += `
                    <div id="inputFormRow">
                    <div class="input-group-append mb-3">                
                        <button id="removeRow" type="button" class="button"><i class="fas fa-times"></i></button>
                    </div>
                        <div class="form__group field">
                            <input type="input" name="name_applicant[]" class="form-input" placeholder="Name of Applicant" autocomplete="off">
                            
                        </div>
                        <div class="form__group field">
                            <input type="input" name="email_applicant[]" class="form-input" placeholder="Email" autocomplete="off">
                            
                        </div>
                        <div class="form__group field">
                        <select id="role_applicant" class="form-select" name="role[]">
                            <option value="" disabled selected hidden>Select your Role</option>
                            <option value="Author" style="color:black;">Author</option>
                            <option value="Applicant" style="color:black;">Applicant</option>
                            <option value="Both" style="color:black;">Both</option>
                        </select>
                        </div>
                        <div class="form__group field">
                        <select id="designation" class="form-select" name="designation[]">
                            <option value="" disabled selected hidden>Select your Designation</option>
                            <option value="Asst. Prof" style="color:black;">Asst . Prof</option>
                            <option value="Asso. Prof" style="color:black;">Asso . Prof</option>
                            <option value="Student" style="color:black;">Student</option>
                        </select>
                        </div>
                        
                        `

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
            count--;
        });

        // letter

        document.addEventListener("DOMContentLoaded", () => {
            //To hide the text area which will have the reason for rejection
            document.getElementById('acceptDialogue').addEventListener("click", () => {
                document.getElementById("alert").style.display = "block";
                document.getElementById("acceptDialogue").style.display = "none";
                document.getElementById("rejectBtn").style.display = "none";
            });
            document.getElementById('acceptCancel').addEventListener("click", () => {
                document.getElementById("alert").style.display = "none";
                document.getElementById("acceptDialogue").style.display = "block";
                document.getElementById("rejectBtn").style.display = "block";
            });
            document.getElementById('rejectBtn').addEventListener("click", () => {
                document.getElementById("rejectBtn").style.display = "none";
                document.getElementById("acceptDialogue").style.display = "none";
                document.getElementById("rejectReason").style.display = "block";
            });
            document.getElementById('cancel').addEventListener("click", () => {
                document.getElementById("rejectBtn").style.display = "block";
                document.getElementById("acceptDialogue").style.display = "block";
                document.getElementById("rejectReason").style.display = "none";
            });
            document.getElementById('confirmation').addEventListener("click", () => {
                let x = document.getElementById('rejectionMsg').value;
                console.log(typeof(x));
                if (x == "") {
                    alert("Please submit the reason before confirmation");
                    document.getElementById("confirmation").checked = false;
                } else {
                    document.getElementById("reject").disabled = false;
                }
            });
        });