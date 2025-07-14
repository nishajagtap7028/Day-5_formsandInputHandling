<h2>Add new user</h2>
    <form action="adduser" method="POST">
        @csrf
            <div class="input-wrapper">
                <input type="text" placeholder="Enter username" name="username">
            </div>
            <div class="input-wrapper">
                <input type="text" placeholder="Enter user email" name="email">
            </div>
            <div class="input-wrapper">
                <input type="text" placeholder="Enter user city" name="city">
            </div>
            <div class="input-wrapper">
            <button>Add new user</button>
            </div>
    </form>
    <style>
            input{
            border: orange 1px solid;
            height: 35px;
            width: 200px;
            border-radius: 2px;
            color: orange;
            }
            .input-wrapper{
                    margin: 10px;
            }
        button{
            border: orange 1px solid;
            height: 35px;
            width: 200px;
            border-radius: 2px;
            color: orange;
            background-color: white;
            cursor: pointer;
        }

        </style>
