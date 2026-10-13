function getCurrentTime(){

    var time = new Date().toLocaleTimeString();

    document.getElementById("responses-log").innerHTML = "The time is " + time;

}

function displayAfter(){

    document.getElementById("responses-log").innerHTML = "Showing after some time";

}

function getName(matricNO) {

    // "HNG-00123","HNG-00124","HNG-00126"

    if(matricNO === "HNG-00123") {

        response = "<table border='1px' cellspacing='0px' cellpadding='10px'><tr><th>Matric Number</th><th>Name</th></tr><tr><td>HNG-00123</td><td>Biobaku Oluwole</td></tr></table>";

    }else if(matricNO === "HNG-00124") {

        response = "<table border='1px' cellspacing='0px' cellpadding='10px'><tr><th>Matric Number</th><th>Name</th></tr><tr><td>HNG-00124</td><td>John Doe</td></tr></table>";

    }else if(matricNO === "HNG-00126") {

        response = "<table border='1px' cellspacing='0px' cellpadding='10px'><tr><th>Matric Number</th><th>Name</th></tr><tr><td>HNG-00126</td><td>Jane Smith</td></tr></table>";

    }else{

        response = "Invalid matric number";

    }

    return response;

}

function displayResponse(getList , userInput) {

    if(getList.includes(userInput)){

            response  = getName(matricNO);

    }else{
        
            response = "Invalid matric number";

    }

    return response;

}

function actionReader(){

    var checker = confirm("Do you want to delete this record?");

    if(checker){

        document.getElementById("responses-log").innerHTML = "Record deleted successfully";

        return true;

    }else{

        console.log("Record not deleted");

        return false;

    }

}