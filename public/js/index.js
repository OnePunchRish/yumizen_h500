document.getElementById('btn').addEventListener('click' , function(){
    const contactSection = document.getElementById('contact-us');
    if (contactSection) {
        contactSection.scrollIntoView({behaviour : 'smooth', block: 'start'});
    } else {
        console.error("Element with ID 'contact-us' not found.");
    }
    });
    
    document.getElementById('contact-icon').addEventListener('click' , function(){
        const contactSection = document.getElementById('contact-us');
        if (contactSection) {
            contactSection.scrollIntoView({behaviour : 'smooth', block: 'start'});
        } else {
            console.error("Element with ID 'contact-us' not found.");
        }
    });
    
    document.getElementById('contact-button').addEventListener('click' , function(){
        const contactSection = document.getElementById('contact-us');
        if (contactSection) {
            contactSection.scrollIntoView({behaviour : 'smooth', block: 'start'});
        } else {
            console.error("Element with ID 'contact-us' not found.");
        }
    });