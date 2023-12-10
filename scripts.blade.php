<script src="http://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function(){
            $("#btn-close1").click(function(){
                $("#div1").hide();
            });
        });
        $(document).ready(function(){
            $("#btn-close2").click(function(){
                $("#div2").hide();
            });
        });
        $(document).ready(function(){
            $("#short-text").click(function(){
                $("#div1").show();
            });
        });
        $(document).ready(function(){
            $("#radio-button").click(function(){
                $("#div2").show();
            });
        });
        </script>