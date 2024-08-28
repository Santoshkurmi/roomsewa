

<style>
    
    
     a{
        display: block;
    }
    .parent {
        
        height: 80vh;
        max-width: 100%;
        padding: 40px;
        justify-content: center;
        align-items: center;
        padding-bottom: 20px;
        display: flex;
        flex-direction: column;
    }

   

    .list {
        padding: 10px 40px;
        margin-bottom: 10px;
        width: 1000px;
        overflow-y: auto;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        border:1px solid gray;
        border-radius: 10px;

    }

    form{
        display: flex;
        gap: 20px;
        width: 1000px;

    }

    .message{
        width: 100%;
        outline: none;
    }

    .msg_sender{
        align-self: end;
        padding: 10px 10px;
        margin: 10px;
        border-radius: 10px;
        background-color: green;
        color: white;
    }

    .msg_receiver{
        align-self: start;
        padding: 10px 10px;
        margin: 10px;
        border-radius: 10px;
        background-color: gray;
        color: white;
    }

</style>


<div class="parent">
    <h3>Profiles</h3>
    <h4><?php echo $owner['full_name'] ?></h4>

    <div id="list_msg" class="list">

    <?php foreach($messages as $message){ ?>
    <div class="<?php echo $message['sender_id'] == $user->id ? 'msg_sender' : 'msg_receiver' ?>"><?php echo $message['message'] ?></div>
    <?php }?>

    </div>


    <form method="post" action="/send_message">
        <input type="text" hidden name="id" value="<?php echo $owner['id'] ?>">
        <input type="text" id="input_msg" placeholder="Enter your message" name="message" class="message">
        <input class="send btn btn-primary" type="submit" value="Send">
    </form>

</div>

<script>
        var list_msg =document.getElementById('list_msg');
        var input_msg =document.getElementById('input_msg');
        input_msg.focus();
        list_msg.scrollTop =list_msg.scrollHeight;
    </script>