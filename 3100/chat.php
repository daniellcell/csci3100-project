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
      padding: 5px;
      word-wrap: break-word;
      color: DeepSkyBlue;
    }

    #message-container div:nth-child(2n) {
      word-wrap: break-word;
      color: LawnGreen;
    }

    #send-container {
      position: fixed;
      padding-bottom: 20px;
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
  </style>
  </head>
  <body>
    <div id="message-container" style="overflow:auto"></div>
    <form id="send-container">
      <input type="text" id="message-input" placeholder="Enter your message here">
      <button type="submit" id="send-button">Send</button>
    </form>
  </body>
</html>
