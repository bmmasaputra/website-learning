async function sendRquest(prompt) {
  try {
    const response = await fetch("http://localhost:5000/gemini", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ prompt }), // Sending JSON body
    });

    const data = await response.json();
    console.log(data.text); // Log the actual response text

    return data.text; // Return API response text
  } catch (error) {
    console.error("Error:", error);
    return "Oops! Something went wrong."; // Default error message
  }
}

// Function to create and append the response chat bubble
function createResponse(responseText, typingBubble) {
  if (typingBubble) typingBubble.remove(); // Remove the typing indicator

  const chatRoom = document.querySelector(".chat-room"); // Select the chat room container

  const chatBubble = document.createElement("div");
  chatBubble.classList.add("teacher-chat", "chat-bubble"); // Add required classes

  const chatContent = document.createElement("div");
  chatContent.innerHTML = responseText; // Set API response as text content

  chatBubble.appendChild(chatContent); // Append content to bubble
  chatRoom.appendChild(chatBubble); // Append bubble to chat room
}

// Function to create and append user chat bubble
function createUserBubble(prompt) {
  const chatRoom = document.querySelector(".chat-room"); // Select the chat room container

  const chatBubble = document.createElement("div");
  chatBubble.classList.add("user-chat", "chat-bubble");

  const chatContent = document.createElement("div");
  chatContent.textContent = prompt;

  chatBubble.appendChild(chatContent); // Append content to bubble
  chatRoom.appendChild(chatBubble); // Append bubble to chat room

  chatRoom.scrollTop = chatRoom.scrollHeight;
}

// Function to create a typing indicator bubble
function createTypingIndicator() {
  const chatRoom = document.querySelector(".chat-room");

  const typingBubble = document.createElement("div");
  typingBubble.classList.add("teacher-chat", "chat-bubble", "typing");

  const dots = document.createElement("div");
  dots.classList.add("typing-dots");
  dots.innerHTML = `<span></span><span></span><span></span>`;

  typingBubble.appendChild(dots);
  chatRoom.appendChild(typingBubble);
  chatRoom.scrollTop = chatRoom.scrollHeight;

  return typingBubble; // Return the element so we can remove it later
}

// Get form element
const chatForm = document.getElementById("chat-form");

// Add event listener for form submission
chatForm.addEventListener("submit", async (event) => {
  event.preventDefault(); // Prevent page refresh

  const promptInput = document.getElementById("prompt-input").value.trim(); // Get input value

  if (promptInput) {
    console.log("User Prompt:", promptInput);

    createUserBubble(promptInput);

    document.getElementById("prompt-input").value = ""; // Clear input after submission

    const typingBubble = createTypingIndicator(); // Show "typing..." indicator

    const APIResponse = await sendRquest(promptInput); // Wait for API response

    createResponse(APIResponse, typingBubble); // Replace typing bubble with actual response
  }
});
