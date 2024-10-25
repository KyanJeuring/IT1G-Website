const chatInput = document.querySelector(".chatInput textarea");
const sendChatBtn = document.querySelector(".chatInput button");
const chatBox = document.querySelector(".chatBox");
const chatBotToggle = document.querySelector(".chatBotToggle");

let userMessage;
const API_KEY = "";

const createChatLi = (message, className) => {
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", className);
    let chatContent = className === "outgoing"
        ? `<p>${message}</p>`
        : `<img src="./resources/icons/chatBotIcon.png" alt="chat bot icon"><p>${message}</p>`;
    chatLi.innerHTML = chatContent;
    return chatLi;
}

const generateResponse = (incomingChatLi) => {
    const API_URL = "https://api.openai.com/v1/chat/completions";
    const messageElement = incomingChatLi.querySelector("p");

    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Authorization": `Bearer ${API_KEY}`
        },
        body: JSON.stringify({
            "model": "gpt-3.5-turbo",
            "messages": [{"role": "user", "content": userMessage}],
            "temperature": 0.7
        })
    }

    // send the POST to the API to receive a response
    fetch(API_URL, requestOptions).then(res => res.json()).then(data => {
        messageElement.textContent = data.choices[0].message.content;
    }).catch((error) => {
        messageElement.textContent = "404! Something must have gone wrong! Please try again.";
    })
}

const handleChat = (event) => {
    event.preventDefault(); // Prevent default behavior if this is in a form

    userMessage = chatInput.value.trim();  // Update the global userMessage
    if (!userMessage) return; // Exit if the message is empty

    chatBox.appendChild(createChatLi(userMessage, "outgoing"));

    chatInput.value = ""; // Clear the input field after sending the message

    chatBox.scrollTop = chatBox.scrollHeight; // Scroll to the bottom to show the latest message

    setTimeout(() => {
        const incomingChatLi = createChatLi("Thinking...", "incoming");
        chatBox.appendChild(incomingChatLi);
        generateResponse(incomingChatLi);
    }, 600);
}

chatBotToggle.addEventListener("click", () => document.getElementById("chatBotButtonToggle").classList.toggle("expandChat"));
sendChatBtn.addEventListener("click", handleChat);
