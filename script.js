document.addEventListener("DOMContentLoaded", function() {
  const submitButton = document.querySelector("button[type='submit']");
  const messageInput = document.querySelector("textarea[name='message']");

  messageInput.addEventListener("input", function() {
    if (messageInput.value.trim() !== "") {
      submitButton.disabled = false;
    } else {
      submitButton.disabled = true;
    }
  });
});