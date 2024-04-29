<footer class="footer">© 2023 Rihana Park</footer>
        <!-- END wrapper --><!-- jQuery  -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
          function showEditConfirmation() {
        // Show SweetAlert confirmation
        Swal.fire({
            title: 'Are you sure?',
            text: 'Do you want to edit?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Edit'
        }).then((result) => {
            if (result.isConfirmed) {
                // Call a function to perform the update operation
                updateContent();
            }
        });
    }

    // Function to perform the update operation
    function updateContent() {
        // Perform the update operation here
        // For example, you can update the content directly or make an AJAX request
        
        // Once the update is completed, show a success message using SweetAlert
        Swal.fire(
            'Updated!',
            'Your content has been updated successfully.',
            'success'
        );
    }
        </script>
        
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/popper.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/modernizr.min.js"></script>
        <script src="/assets/js/detect.js"></script>
        <script src="/assets/js/fastclick.js"></script>
        <script src="/assets/js/jquery.slimscroll.js"></script>
        <script src="/assets/js/jquery.blockUI.js"></script>
        <script src="/assets/js/waves.js"></script>
        <script src="/assets/js/jquery.nicescroll.js"></script>
        <script src="/assets/js/jquery.scrollTo.min.js"></script>
        <script src="/assets/plugins/chart.js/chart.min.js"></script>
        <script src="/assets/pages/dashboard.js"></script>
        <script src="/assets/js/emiCalculator.js"></script>
        <!-- App js -->
        <script src="/assets/js/app.js"></script>

     <script type="text/javascript">

$('.phone').keypress(function(e) {

    var arr = [];

    var kk = e.which;



    for (i = 48; i < 58; i++)

        arr.push(i);



    if (!(arr.indexOf(kk) >= 0))

        e.preventDefault();

});
// To capitalizeFirstLetter in the input field

 function capitalizeFirstLetter(input) {
        input.value = input.value.charAt(0).toUpperCase() + input.value.slice(1);
    }
    // To validateInput in the input field
     function checkForSpecialCharacter(event) {
        // Get the pressed key's character code
        var charCode = event.keyCode || event.which;
        var charStr = String.fromCharCode(charCode);

        // Regular expression to check if the character is a special character
        var specialChars = /[~`!#$%\^&*+=\-\[\]\\';,/{}|\\":<>\?@]/;

        // If the character is a special character, show an alert
        if (specialChars.test(charStr)) {
            alert("Please doesn't press Special character!");
            event.preventDefault(); // Prevent the character from being typed
        }
    }

</script>
<script>
$(document).ready(function() {
    $('#textInput').on('input', function() {
        var inputValue = $(this).val();
        if (/[^a-zA-Z\s]/.test(inputValue)) {
            $(this).val(inputValue.replace(/[^a-zA-Z\s]/g, ''));
        }
    });
});
</script>

    </body>
</html>
