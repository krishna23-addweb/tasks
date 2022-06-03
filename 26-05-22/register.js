function sendData(){
    let fname = document.getElementById("username").value;
   let mail  = document.getElementById("email").value;
   let password = document.getElementById("password").value;
   let div = document.querySelector("#main");
   div.innerHTML = "Sending Data...";
   let user = {
       name : { value: fname},
       mail: { value:mail},
       pass: { value: password}
   };
   const options={
       method : "POST",
       headers: {
           "Content-Type": "application/json",
       },
       body: JSON.stringify(user),
   };
   fetch("http://localhost:49158/web/user/register?_format=json", options)
    .then((response)=> {
        if(response.status !== 200){
            console.log("Error : "+ response.statusText);
            throw new Error(`${response.status}`);
        }
        else{
            return response.json();

        }

    })
    .then((user)=>{
        console.log(user);
        div.innerHTML = "<br>Response recevied!<br>";
        let id = user.uid[0]["value"];
        let firstname = user.name[0]["value"];
        let date = user.created[0]["value"];
        let creationDate = new Date(date);
        let dateString = creationDate.toDateString();
        let timeString = creationDate.toLocaleTimeString();
        let p1 = document.createElement("p");
        p1.innerHTML = `Name : ${firstname}`;
        let p2 = document.createElement("p");
        p2.innerHTML = `ID : ${id}`;
        let p3 = document.createElement("p");
        p3.innerHTML = `Created at : ${dateString},${timeString}`;
        div.appendChild(p1);
        div.appendChild(p2);
        div.appendChild(p3);
    })
    .catch((error)=>{
        alert(`Error in server comm ${error}`);
    });
}
