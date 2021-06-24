function validate() {
    {
        var username = document.getElementById("user");
        var password = document.getElementById("pass");

        //Username and password
        if (username.value == "" && password.value == "")
            alert("Username or password can't be blank")
    }
    {//Login
        if (username.value == "Sunny2003" && password.value == "(sunny1i59479@)")
            swal("Welcome Bing Sun Li", "Login successfully!", "success")
        else if (username.value == "Judith" && password.value == "user777888")
            swal("Welcome Chi Ling Hu", "Login successfully!", "success")
        else if (username.value == "admin" && password.value == "admin") {
            swal("Welcome admin", "Login successfully!", "success")
            .then((value) => {
                window.location = "../UI/Main/admin.html"
            });
        }
        else
            alert("Username or password is not correct");
        return false
    }
    }
