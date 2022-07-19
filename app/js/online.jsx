// selecting all required elements
const wrapper = document.querySelector(".wrapper");
const toast = document.querySelector(".toast");
const wifiIcon = document.querySelector(".icon");
const title = document.querySelector("span");
const subtitle = document.querySelector("p");
const closeIcon = document.querySelector(".close-icon");

//Concept is so simple to detect internet connection.At first, using Ajax i'll send a GET request
//to a particular URL and check, that URL is sending any data as response or not and the response status is 200 or not.
//If these will be means URL sending any data as a response and the response status is equal to 200 then user is
//definetly connected to the internet otherwise user is disconnected from the internet.
let again = 0;
let repeat = 0;
window.onload = ()=>{ // once window loaded
    function Ajax(){
        let xhr = new XMLHttpRequest();
        xhr.open("GET", "https://jsonplaceholder.typicode.com/posts", true); // sending get request to this url
        xhr.onload = ()=>{
            //if ajax status is equal to 200 or less than 300 that mean user is getting data/response from that provided URL
            //or user is online so he/she or any gender (fuck!! this world) is getting response or 200 status code
            if(xhr.status == 200 & xhr.status < 300){
                toast.classList.remove("offline");
                title.innerText = "You'are online now";
                subtitle.innerText = "Hurray! internet is connected.";
                wifiIcon.innerHTML = '<i class="bx bx-wifi"></i>"';
                repeat = 1;
                closeIcon.onclick = ()=>{
                    wrapper.classList.add("hide");

                }
                
                setTimeout(()=>{
                    wrapper.classList.add("hide");
                }, 500)//After 2 seconds toast will be hidden automatically
            }else{
                //user isn't online or may getting something other error
                offline(); // calling offline function on both conditions
                setTimeout(()=>{
                    wrapper.classList.add("hide");
                }, 1500)//After 1.5 seconds toast will be hidden automatically
            }
        }
        xhr.onerror = () =>{
            //if the passed url is incorrect or returning 404 or other error
            offline(); // calling offline function on both conditions
            setTimeout(()=>{
                    wrapper.classList.add("hide");
                }, 1500)//After 1.5 seconds toast will be hidden automatically
        }
        xhr.send();
    }
    function offline(){
        if(again != repeat){
            wrapper.classList.remove("hide");//if user goes offline, show the toast again
            repeat = again;
        }
        toast.classList.add("offline");
        title.innerText = "You'are offline now";
        subtitle.innerText = "Oops! Internet is disconnected.";
        wifiIcon.innerHTML = '<i class="bx bx-wifi-off"></i>';
        closeIcon.onclick = ()=>{
            wrapper.classList.add("hide");
        }
    }

    //let put this ajax call inside setInterval function so we can call it after every 100ms
    //so we don't need to refresh the page to see the update status
    setInterval((()=>{
        Ajax(); // calling Ajax function
    }), 100); //100ms
}