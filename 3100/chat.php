<?=template_header('Chatroom')?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chatroom</title>
  <script defer src="http://localhost:3000/socket.io/socket.io.js"></script>
  <script defer src="script.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <style>
	#b {
      position: absolute;
      left: 35%;
	  overflow: visible;
	}
	h1{
		display: block;
		font-weight: bold;
		font-size: 24px;
		text-align: center;
		width: 100%;
		position: relative;
	}
    /*message output area */
    #message-container {
	  background-color: rgba(202, 214, 240, 0.6);
      width: 90%;
      width: 600px;
      height: 600px;
      overflow: auto;
      text-align: center;
      border-radius: 30px;
	  position: relative;
    }

    #message-container div {
	  background-color: rgba(202, 214, 240, 0.6);
      padding: 5px;
      word-wrap: break-word;
	  color: #384051;
    }

    #message-container div:nth-child(2n) {
      word-wrap: break-word;
      color: #394253;
    }

    /*message input + send button area */
    #send-container {
      position: relative;
      padding-bottom: 100px;
      bottom: 0;
      max-width: 600px;
	  width: 80%;
	  display: flex;
	  left: 10%;
    }

    #message-input {
	  flex-grow: 1;
      border:0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
	  background-color: rgba(57, 66, 83, 0.6);	  
	  color: #E8ECF4;
      padding: 14px 10px;
      width: 200px;
      outline: none;
      border-radius: 24px;
      transition: 0.25s;
    }

    #message-input:focus{
	  background-color: rgba(57, 66, 83, 0.6);	  
    }
	
    #send-button {
      border:0;
	  background-color: rgba(202, 214, 240, 0.6);
	  color: #384051;
      display: block;
      margin: auto;
      text-align: center;
      padding: 14px 20px;
      outline: none;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
    }
    #send-button:hover{
	  background-color: rgba(57, 66, 83, 0.6);	  
	  color: #E8ECF4;
    }

    /* scroll bar */
    ::-webkit-scrollbar {
      width: 15px;
    }

    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px rgba(202, 214, 240, 0.6); 
      border-radius: 24px;
    }
    
    ::-webkit-scrollbar-thumb {
      
	  background: rgba(57, 66, 83, 0.6); 
      border-radius: 24px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: rgba(202, 214, 240, 0.6); 
    }
  </style>
  </head>
  <body>
  <div id = "b">
    <h1>Chatroom</h1>
    <div id="message-container"></div>
    <form id="send-container">
      <input type="text" id="message-input" placeholder="Enter your message here">
      <button type="submit" id="send-button">Send</button>
    </form>
  </div>
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; 2020, Board Game Platform</p>
            </div>
        </footer>
    </body>
</html>
