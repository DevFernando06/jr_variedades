let form = document.querySelector("#form_login");

form.addEventListener("submit", async (event) => {
    event.preventDefault();
    
    let formData = new FormData(form);

    try {
        let response = await axios.post("auth/login", formData);

        if (response.data.status == "success"){
            // window.location.href = '/dashboard';
            alert(response.data.dados);
        }
        
    } catch (error){
        console.error(error);

        if (error.response){
            console.log(error.response.data);
        } else {
            console.log("Erro de conexão com servidor");
        }
    }
});