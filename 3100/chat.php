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
    /*message output area */
    #message-container {
      width: 90%;
      max-width: 600px;
      height: 750px;
      overflow: auto;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-55%);
      text-align: center;
      border-radius: 30px;
      border: 2px solid MidnightBlue;
    }

    #message-container div {
      padding: 5px;
      word-wrap: break-word;
      color: Black;
    }

    #message-container div:nth-child(2n) {
      word-wrap: break-word;
      color: MediumSpringGreen;
    }

    /*message input + send button area */
    #send-container {
      position: fixed;
      padding-bottom: 0px;
      bottom: 0;
      max-width: 600px;
      width: 80%;
      display: flex;
    }

    #message-input {
      flex-grow: 1;
      border:0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid black;
      padding: 14px 10px;
      width: 200px;
      outline: none;
      color: black;	
      border-radius: 24px;
      transition: 0.25s;
    }

    #message-input:focus{
      border-color: Chartreuse;
    }
    #send-button {
      border:0;
      background: crimson;
      display: block;
      margin: auto;
      text-align: center;
      border: 2px solid DarkBlue;
      padding: 14px 20px;
      outline: none;
      color: black;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
    }
    #send-button:hover{
      background: CornflowerBlue;
    }

    /* scroll bar */
    ::-webkit-scrollbar {
      width: 15px;
    }

    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey; 
      border-radius: 24px;
    }
    
    ::-webkit-scrollbar-thumb {
      background: grey; 
      border-radius: 24px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: SlateBlue; 
    }
  </style>
  </head>
  <body>
    <h1>Board Game Platform Chatroom</h1>
    <div id="message-container"></div>
    <form id="send-container">
      <input type="text" id="message-input" placeholder="Enter your message here">
      <button type="submit" id="send-button">Send</button>
    </form>
  </body>
</html>
