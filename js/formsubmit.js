if(typeof window.location.hash != "undefined" && window.location.hash == "#thankyou"){
    $("<p>Thank you for submitting! I will reach out to you shortly!</p>").appendTo("#formsubmit").delay(5000).fadeOut();
};