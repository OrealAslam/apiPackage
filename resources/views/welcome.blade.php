<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>

<body>

    <form id="form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input type="text" name="apiKey" id="apiKey">
        <button type="button" name="submit" id="submit">Submit Form</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    
    <script>
        const REQUESTED_URL = 'http://192.168.1.11/LaravelCustomPackages/LaravelPackages/public/api/apiData';
        $(document).ready(() => {
            $("#submit").click(() => {
                const apiKey = $("#apiKey").val();
                $.ajax({
                    type: 'POST',
                    url: REQUESTED_URL,
                    data:{
                        "apiKey": apiKey,
                    },
                    success: (response)=>{
                        console.log('success', response);
                    },
                    error: (response)=>{
                        console.log('error', response);
                    }
                })
            });
        })
    </script>
</body>

</html>
