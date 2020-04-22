<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chatroom</title>
  <script defer src="http://localhost:3000/socket.io/socket.io.js"></script>
  <script defer src="script.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css">
  <style>
    body {
      padding: 0;
      margin: 0;
      display: flex;
      justify-content: center;
    }

    #message-container {
      width: 80%;
      max-width: 500px;
    }

    #message-container div {
      background-color: rgb(24, 164, 199);
      padding: 5px;
    }

    #message-container div:nth-child(2n) {
      background-color: rgb(17, 182, 86);
    }

    #send-container {
      position: fixed;
      padding-bottom: 30px;
      bottom: 0;
      background-color: rgb(255, 255, 255);
      max-width: 600px;
      width: 80%;
      display: flex;
    }

    #message-input {
      flex-grow: 1;
    }
    #send-button {
      border:0;
      background: orange;
      display: block;
      margin: auto;
      text-align: center;
      border: 2px solid #4614f8;
      padding: 14px 20px;
      outline: none;
      color: black;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
    }
    #send-button:hover{
      background: #e4426a;
    }
  </style>
  </head>
  <body>
    <div id="message-container"></div>
    <form id="send-container">
      <input type="text" id="message-input">
      <button type="submit" id="send-button">Send</button>
    </form>
  </body>
</html>