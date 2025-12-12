//code is base on lesson-12  with some adjustments made to variables
document.addEventListener("DOMContentLoaded", function(){
    const gallery = document.querySelector("#add");
   
    const links = document.querySelectorAll("#add a");
  
    for (let i = 0; i < links.length; i ++){

        links[i].addEventListener("click", function(event){
                
                let source = links[i].getAttribute("href");

                const addvertisements = document.querySelector("#addvertisements");

                addvertisements.setAttribute("src", source);
  
                let text = links[i].getAttribute("title");
                console.log(text);
               
                const description = document.querySelector("#description")

                description.textContent = text;
                
                event.preventDefault();
                
            });
        };
});		