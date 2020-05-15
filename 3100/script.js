const socket = io('http://localhost:3000')
const messageContainer = document.getElementById('message-container')
const messageForm = document.getElementById('send-container')
const messageInput = document.getElementById('message-input')

// request the user to enter the name he/she wants to display
const name = prompt('Enter the name you want to display in chatroom:')
appendMessage(`${name} (You) connected to the chatroom`)
socket.emit('new-user', name)

// display other user's message
socket.on('chat-message', data => {
  appendMessage(`${data.name}: ${data.message}`)
})

// display who connected
socket.on('user-connected', name => {
  appendMessage(`${name} connected to the chatroom`)
})

// display who disconnected
socket.on('user-disconnected', name => {
  appendMessage(`${name} disconnected from the chatroom`)
})

// display the current user's message
messageForm.addEventListener('submit', e => {
  e.preventDefault()
  const message = messageInput.value
  appendMessage(`${name} (You): ${message}`)
  socket.emit('send-chat-message', message)
  messageInput.value = ''
})

// message function
function appendMessage(message) {
  const messageElement = document.createElement('div')
  messageElement.innerText = message
  messageContainer.append(messageElement)
}
