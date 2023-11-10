<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Names and Percentages</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }


        .col {
            background-color: #2874f0;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        h1 span {
            font-weight: normal;
        }

        .main-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .mainbox {
            flex: 0 1 calc(25% - 20px);
            /* 25% width with margin */
            background-color: #fff;
            border: 1px solid #e0e0e0;
            margin: 10px;
            padding: 10px;
            box-sizing: border-box;
        }

        .box {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #e0e0e0;
            padding: 10px;
            background-color: #e0e0e0;
            height: 93%;
        }

        .mainbox:hover {
            box-shadow: 0 2px 6px 2px;
        }

        .image-box img {
            max-width: 200px;
            height: auto;
            border-radius: 20px;
        }

        .name-box h1,
        .percentage-box h1,
        .additional-info-box h1 {
            margin: 0;
            font-size: 18px;
        }

        .button {
            background-color: #ff6600;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #e55e00;
        }
    </style>
    <style>
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 254, 254, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 80%;
            justify-content: center;
        }










        main {
            width: 100%;
            height: 500px;
            margin: auto;
            /* margin-top: 100px; */
            box-shadow: 0 2px 6px 2px;
            position: relative;
            overflow: hidden;
            display: flex;
        }

        .slide {
            width: 100%;
            height: 100%;
            transition: 1s;
            position: absolute;

        }

        #rig {
            position: absolute;
            right: 0;
            top: 50%;
        }

        #lef {
            position: absolute;
            top: 50%;
        }


        .scroll-container {
            overflow-x: auto;
            /* Enable horizontal scrolling */
            white-space: nowrap;
            /* Prevent content from wrapping to the next line */
        }

        .content {
            width: 2000px;
            /* Set the width of your content */
            white-space: nowrap;
            /* Prevent content from wrapping to the next line */
            font-size: 0;
            /* Remove the default space between inline-block elements */
        }

        .item {
            display: inline-block;
            width: 100px;
            /* Set the width of each item in the content */
            height: 100px;
            /* Set the height of each item in the content */
            background-color: transparent;
            /* Set a background color for better visibility */
            margin-right: 10px;
            /* Add some margin between items */
            line-height: 100px;
            /* Center the text vertically */
            text-align: center;
            /* Center the text horizontally */
            color: #fff;
            /* Set text color to white */
        }

        .item img {
            width: 100%;
        }

        .navbar {
            background-color: #2874f0;
            height: 30px;
            text-align: center;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            margin-inline: 20px;
            font-size: 1.5rem;
        }

        .navbar a:hover {
            background-color: #e55e00;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #ffcc99;
        }

        section {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #ff6600;
        }

        p {
            text-align: justify;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
            margin-inline: 18px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #2874f0;
            color: #fff;
            box-shadow: 0 2px 6px 2px black;
        }

        .box1 {
            width: 100%;
        }

        .mainbox1 {
            /* flex: 0 1 calc(25% - 20px); 25% width with margin */
            background-color: #fff;
            border: 1px solid #e0e0e0;
            margin: 0px;
            width: 100%;
            padding: 0px;
            box-sizing: border-box;
            justify-content: center;
        }
        .mainbox1 input,textarea{
            width: 80%;
            height: 50px;
            border-radius: 20px;
        }
        .mainbox1 label{
            text-align: center;
        }
        
    </style>
</head>

<body>


    <div class="navbar" id="navbar">
        <a href="#navbar">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>

    </div>


    <main>
        <img src="https://images.unsplash.com/photo-1542826438-bd32f43d626f?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTJ8fHxlbnwwfHx8fHw%3D"
            alt="" class="slide">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUY66njJm8GanGLWop9MCnCJIpptxTT40lGQ&usqp=CAU"
            alt="" class="slide">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTICYM-eL_ytgG9aefdg6jtH9QzfqIDW68D2RfU5dgITW-HPy82tdN5DN2Bds3bXs3N3rw&usqp=CAU"
            alt="" class="slide">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTZSPYBybGiugaieqFkTz2W5RVIoRicpzBVA&usqp=CAU"
            alt="" class="slide">
        <div class="nav" id="lef">
            <button onclick="goPrev()" class="left"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                    <path d="M15.293 3.293 6.586 12l8.707 8.707 1.414-1.414L9.414 12l7.293-7.293-1.414-1.414z" />
                </svg></button>
        </div>
        <div class="nav" id="rig">
            <button onclick="goNext()" class="right"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
                    <path d="M7.293 4.707 14.586 12l-7.293 7.293 1.414 1.414L17.414 12 8.707 3.293 7.293 4.707z" />
                </svg>
            </button>
        </div>

    </main>
    <div class="col">
        <h1>Our-<span>Top List</span></h1>
    </div>
    <div class="scroll-container" id="scroll-container">
        <div class="content">
            <!-- Add your content here -->
            <div class="item"><img
                    src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFRYYGBgaGBgYHBoaGBgYGBgYGBgaGhoYGhgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHzQrJSw0NDQ0NDQ0NDQ0NDQ1NDQ0NDQ0PTQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDY0NDQ0NP/AABEIAPsAyQMBIgACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAADBAECBQYABwj/xAA6EAABAwIEAwUGBgICAgMAAAABAAIRAyEEEjFBBVFhInGBkaETMrHB0fAGFEJS4fEVYgdykqIXIzP/xAAaAQACAwEBAAAAAAAAAAAAAAABAgADBAUG/8QAKhEAAgICAgIBAgYDAQAAAAAAAAECEQMhEjEEQRNRYQUUIjJxoYGx8JH/2gAMAwEAAhEDEQA/ANcUnFXbhStltAckQUguZ+XRr+Qxm4Qo9PCkLSyBUfVa3dMsMUTk2Cbhua9WqNYFn4/jTGDVcdxbj7nyGq1a6JGDkaHH+PC4BXKivmMlKVmOcZNyiYakZURfGPE3MEVtUAsbBNhbFB6WUTTFj1NHal2OTDXJKaGCNKuCg5kjxjO6k4U35XDtd4Fy2dpG6dMVqlZpucgvesbhPFzWB7JhoAzc3bgiBe2osm31FNskXasO+sguqShQSrsYU3Eh4FXZTnZGp0U0ykgQT/Ld6luFPMrQDF7IpxsjYk3Cnmruwh5ppqKiooVszDg+q9+TC0cqnIjxBY4/iLBuEliOPMb+oL5m/G1XblUh7tSU1MyLEdtjPxU0aLAxn4he/RZbMKUzTwh5IUWxxpC73vf7xKszDLSo4I8lo0MD0UosSoxaOCJ2WjQ4cOS2aODATHsgFKGTRjjCQoLCFoVngJR1UFJJ0x0rPUahTYfCUYEPE1SBZS0w0PGugurpPDku1TjMMVEkEXykOLgAAQA6AZJ2JjSBb+k1SYSq16JGXo9pPdp8wtbDYdSLpuJXdWAp4dGFGE5kAUFqtpCc2LtCsEQ0zyUNpnkg0iKZLUTKvNpFXyEJU0FyBZFYNV4XgnBZUtUQiFQoQ4tvCuiKzhfRdG2iFcUQjQ1owafDeiZZw8clsCmFYMQJyM9mDHJHbQhNWQ6lQKAuwDzCSxFdExFVI1DKVseMRTEvJVKVMpgUpTDKKRqy1IpSaiPoSjMpQmWMUUaI3QnSw+VMh/MIwYjYfBOcYaPE2Cq5ONuXQJOPbMrFyWOA1IMd+3qn8NixA7loN4KSLkJbC8Lbkcwk5mOLZ6C7bdWlqzvzsUXbZTKUW9FXYiUTCPBdBSDqZFirYckOBW5ytWgOOjqqeHELxwwUYGrITuVZZSkzG7TFBQCHVw6eyKrxCRclsKkYdZhCXzI/FcUAs6lWlasc+SNULatjcr0qgcplXBJYESEBr1Y1EwGXc6EvUxQCBiap2SjGybpGx1H6jD8VKA+uVas0AIBEqbGjFEOfKHCL7EojKSlFiaBMCcpsVWUE5TZCgJSBhiuGouVSwQQRsZQEchrDcPNi7y+q0SA37srtqhwDh49Cl6pXlPO8nK8jhJ9PRSm5dhKleYKQc6Kv/dv/ALN+Zaf/AFRS5I8UqZWh8wWPa/vE5XDvLXOWSDlOVN9/8g8aWiuLZ2il8qxuK/iN2Z3s2M7LM5a9zg8tBMkACAekoXB/xQys4Me3I82F5a48p2K9VgUo4YprdKzT8clG2jqMPii1a+HxoKw2sV2gjRNki+12USxxkdK2uCs/iWNDRqkGYshZuOqueVU3OS4srjgqViONxBe5FwoIXqeERC0tWnHj4o0VWjRpBFyJCliYRvzS0ITixapWAUe2We1xJRQiNxQV9RLuqE6K7WSispID6QNtMlMU6K18FwWo8A5Q1p3da3ONVr0Pw+we84u6Cw+qZRbM0vJhHVnMezRGYd2uUxzgwuyZgKbRAY23MT6lFH3/AAE3xmeXl/RHKU+G1CJyHxgHyKYZwZ5EktB5T8YXRkf1v4r0bf0EeCK5eVN9UYtPgwjtPv009dUwzhbBEyfG58AtIDf1+ikM+9yjxRU8037FfyrQ2Gtjl39Ss/ENXQNYIusvH0SSS3TcdOY6rjfi3gvLHnBbRbhy06ZjvK4Ti+KqYqo4UjLKZLcoMFxj3tI/hd1VpEnKP1WB77L5bijUw9So0dl0kEHmNwuf+FeOuTlNdHY8am3XYLEVH0w5tQ5nuaWC4OVpAnrslmYAObqQ7bpySNSq4kudJJvJWk3Gy0ZR2u5dt6OljjHjxO1/CnEnVqPa99hyOPPk7y9QVtyuX/49wbnHEGCP/wA9dz211b2RYqxRtWcnNxjkcV6BOKoWhFLEMhVZYS7iCMkTSpkmAmTw4nVNcOwu5WsWquM5JbKMuapVE5p/Cyhf41y6VzQoyhD8xIr+aRxTKSksV2GApyreauWygKc4ZSz1WN5uE9wuUD2aa4ZVLKjXabHuKX2DJ+113R3dQ2svAoWGrZh1t9hF0PitKaatHGao8RNvEqovJ2FgiCxv3KGtiRqCiAFo3NuVL2QANiblFa2BGo9V4aRqOqhCj2w4TptyVg3c6H0Vh97rwChCGttG3MID6Ol7TPVHJXkKIDe3oCfl0XH/AIs/B/tw6pRympF2uMZu52x7/RdmP6UVPJBxRZiyzxy5RZ+e8fwetSvUovZB3HZ/8tD5qvDsO57w1jbnY7bEmNgv0C+g1whzQ4HmAZSzOEUWmWsa0/6iJ71W8SZ0V+JzrrZg8A4cKNPI25mXO0zHn0EJ3F4UuGYDtDUcx9VtflxtZV9nGoT8FVGB5pOfP2cmWoDxddFxbAgtL26j3hzHNYL2KicWtG7HNTVo3MC8ZQnM0rnaeIIT+HxkrBOUova0JLE+zT9lKn8uqUq0ontFYvjauihqRwDHq4co9ihua5q2NHRTQy16KHAwkmVEem+UtgaOxoVcpBG49FqMcD8f5WW+g4Nb2Y7N+YtomME8RlPOR8x980cM3GTjI5U4p7Q80wplQNFZpWoqINkNxRVFlCAwVYPVHPCqaiFhoKX2U5kuXrxepZKGM4n6Kc40SmZQ58IWHiMZhdeL0qao3IS1TiLBzPcEsskY9uhlBvpGnnUGoso8TbEtEnYH42VaGMc5wbAG51lI/IhaSfY3xS7NOrVhpMSAD5Rdcaakn5cl1eIPYf8A9XfArj86GRmrxIqmFBXphA9orF8rLl6o2qI9h8aW6ov+TWS58Ift1lWJk+KLAzKs55iF57OShdK2gNJ9HmUBum8Lw173C8N5pzCYINGep4BHfiSdLBRtezJkzU6idS1oLI17MLOykc5+hR+H1uyAdY80fE0hqPFGa5RUl6MSdOi2Gq5hMQdCFL642StF+U30Nj8ivPF08J3H7gcdhnYhDc8oL6rW+8QPFJ4nijW+6J5E2E92qE80I9sZQcukaElQXganT0WHUx73fqAH+sXPK6oC4zJN7n78vJZpeZHqKsuWB+2bDscza57wPKdUpV4w2DlBnqPWxSOTd0d8x5jyUFoAiINxO4HJUS8ubWtDrDEO/iFQidIjTc7z0QK1Z7zLjJnQSQB0Eq7qZgkC3Pcnv5Kkjkf5G3xWeeSctNssUYrpBPZmBcwLwevRZTMa81yzL2O1e5giPKVrAGxjW1rqW4B0uIA52vn6G33KVxlJ6sNpdgmZp0AH35p3hDw5xsQRzHXmi/4wOBuWyBve20pzC4csETNgL9BzWzB481JSl0U5MkXGkXqslrhzaR5hcpjcC5h5hdbUMNKTe4GxW6cbK8WZweujkJQ3VYK1eKcOI7TPJYM3uszjvZ1MeSM42gprSvezVWM5Ikp1SHoaDVp4bCNY3O/wCHw/Chzp/SLlVx9cvflHuhWydI5+bI/2r/JFWuXmTor0GlxhqWa3McoWthm5S0N1BCp7M3RoU6DmBubzWxTMjvS9Fudpzc4HTqqYYlrsv9BPiaSTXTFlvXtFcRSLTYW9Ehjy6LExHOFu1xLSsfFiw5+io8qPCLpsswu2Yx3nu7/NAyyYDrgTEmB9Uy5suuWxr2XHyXqTHXhgkS0RvfmuXFtmsA94aBJ57QfNRTxQeSGOGtyBICeGDn3xMXH0t80XD4BkyWAHyBWiGDJJ6QjnFdidGkS13IQ3/sfrfQc03RwgaSXaEazbMeQWjRwzWgAAADQcjz71XEyB3ad/ctEsCxw5S9FXyOTpGeKDBOUOn5eO/ei4PDhxMgiOvxS76JcdfDQkn4LaoUgxoA/tVeJCWSdySSX9jZZUqT2RTw7W6D7OqKGhAq45jLE+Un4JWtxQfobPU29F0ZZcWNVa/hFChOXo0jZQsJ/EXmxcBeLDXzQHVnETLjub/cqmXmxXSbHWB+2buLPYdHT4rOZUnVRRe4UZ0zEWQHvm41ViyckpfVCONNoYc6NdFica4d+tniPmtJtWbKWvnslFpNDY5yhK0ckypyui5ijcSwvs32HZNx9Et7RJR04z5KzrGsyURzddZrGQ0ncrY4qNG8gEg6noEZ9nLvlsthaOVubcp3Dsi+5UZLgck1Sb2u5RaFZp4V+oQcQwh09ZCG1xFwnbPb92KMUpR4+0B6dlcNVJF/4Pcg4qkJ1XqZLTHVErNjWE9LJGpegftlaM9uEYNGj4+KYYwDQD4JfEY9jBJM9BFzyStbi0fpi2508NFVzwYtKv8FtTkaeW8ga2N9h0JsiBqwDxF+Y3m20QJ0PRVOLe8g5zrAFwLdEj82C6TD8MvbOiBSdeu2ZBDj1dAHlJWW1r3AwTYXEk66fBHbgXtAJOxJ/hJPyJZFqI0YJPbL+0gh36uegnu80viKriTdx6TomW4F7jaIO5PqjP4bIgm9pItMKlYssotJOhuUEzMywfvZSG5pBtpAEXWszh7dSSfki/lWNEx5pl4s63SQHmRiNw8m7SeUixBCI2i4iA0WNgBATlbiDR7onu0lJOrucR2o7rWVUoQi6Tv+B1JtbVD+PpD2OsFsGPksT20XWlj6uWm1v7jfuWBcOMmx0C3yfVfRFCQ098FM0r3SNBhcDOy0cM3soxYJAON4fNSJGre14brkvar6A5mZhHMEeYXz/8sUzL8GSkd/xRvaSrW9oLQrw9jXjdoSWXQoTW7M8eqDtb20xSGqDuCmWG6iAw1O7UTDPyuy8/ih0dCFM36qP9LUkDu0MYmnNxYrG4pWy+86ATpe52W3nJFlmYvDlxEQL3JE26eICr8rHKUbh7HwySdSMYsItEEbWjpfbXXvVXCGmRmOYDcgCYJjl1U8Sw5DiZ3jyGwWbTwr84u8CSTr8PJci2pOKX2Numrs18Ph3usBDTH+oHOBF1pUOHsF4na5lU4TlZRZnfeJJJkybkX74TgxbInMF0sWGKVyavszSnJukitek4js+hhZFemDIeHAwTeQQBv1T7uJi+WLRqdpvKq/FB05otfnHiqfJ+Jq73/QYcl6I4U94YXPmATlze8QNytFuLba8HrZZD8eB7ump3lIYnFON/G+n9IQ8/hjSSbojw8nbOhfj2gkAt/vRY+KxpfYmwOgWe/FHp3NMA+qKx73GSwgA2vZJLzJ5k9a+w8cSjsuXgTmMDa6pTqMkGTfmYjrCYdgswvIHIc0RmAYLxJ5m6MMMnT/2RySJ4q8Oa0NvG6SZhLglab2aBR7O631bsoukK0qcEpig2ytTZqUZjLd6aKFkwlMWXEfmmLsOJVxTovebZWOPjFvWF8qzn95TMuww5Kz6dwHFtcDSPUt+YR61ItdBXNUXFpDmm4vI26rq8Di2V2QYzjUfMdEVUlXsPkYnF8l17B0uSOzTqFR9EtKuwzfflzSpVpmdhmOi6K5u6AOfoiNfHUfBH1TFILtpIMIL6ha0EkkzyGk2ATD27jzG3VDxAnL1Pms2RygnT/gtjT9GViq5DwRpFwQCTE+WqXdiTqTYTf3YvohcTPtGPh2RxsCCLQbCx6LOwNOaWR7y8nsyAbA7z01lYOUpN77NKSSGqXEGVHEMfJb390idtER79soMgyZiNvNZ/DOAPY4uz3Mi7Tp4FbNLhlyXPLulg0dwVkcU36A5RXsRfVIgTYalxgx81FPiI90X8QRHgtT/E0yZcwOP+0n4pqng2DRoHgn/KuXbF+RGAWPLoaDuL2Gvqi0ODOMZ3kgGY/nkugazp6KwYrY+NFd7EeViNLBMboPmfNMNYjZVGVXRxqOkhHKymVWDeavlUEKyqBZTLuq5PVF71Gl90aBZQt0CKwKGN/lLcV4izD0y9xEx2WzBcdgEy1sCTk6Rg/jXHiG0AbmHP6D9I8TfwXG5R9hFrVX1Hue/3nOkzbXl8F72J5+oVMpq+zr4sfCCR0jX2g/Ta6CMU5pzMJDm6H5E79ylx8PjAVXCBoQCLQJJ6BOw0umdTwjj7K4DHwx/LZ3/U/LVab6BFxcL5pi8MSNC2fiCLp/hn4uqUYa+ajAYn9Y7v3ab+aKmpL9RjzeK1uH/h3Qf58/qiDy67JHh3GcPiB2HjNu02cPA3TxokaGU9fTZidp01RaPD4FLYqg5xF4aNI1/hFzEa2+CkP+x9FVOCkqY0ZNbRms4JTBJABJM3vJ1kpluFA0EI7j96FSHnr8UI44R6QXKT9ghTVsiIH9ymenqnpAsqAvZVaeignp6ogKyvKxd3KpPX0UIec211SeQVifsqEpD0ePwXlBP3/KkNJTEI9T6KW0ybrz3tYJcQAOdgFyfHvxo1gLMOM7tM/wChvX/buHmhpdjxhKT0jf4rxSnh2FztTo0e84/e6+bcV4g/EvLqg6NbMZByH3dZtTHVXvL6v/2HQuHvDeC3kOSYw72OcHiHWII+EjoUkpN9HQw4YwW+wbQ9gzNOcTpuAN0T/JD7hGyTOWBIbHeNyfJT+UP7Wpf5RfX3N4uk6c5P05L1OidROu/OEapSA0Ppy1/tD9q4wRYTbYkR8PvRO7rRE0LvYXWuBBBJ1jQ5evVLV8MdGCADAgkrRAdceehiJ35oL6Um+/f9jZVsOjAqUHAyJBHKx15i42WhgPxZiqJDZ9o0bP1AHJw+cprEUd3GwG/wCyq9BxEU220k7X+OvijGXsrljU1s7PBfj6i6G1Wlh7sw8wt7DcTw9USx7T3EL5J+Tiezc6zrySzsOQZbIOttR4hWKTZll4q9aPt2QHR3zXvZHofRfG6PFMSz3Kr46nN8Vo0PxliWe9ld3iEeX2KX48l0z6iKbu/xC9B5H0Xzyl+Pav6qfk76hMs/5B503jy+qFr7ivDM7i/L0U5+nouL/wDkFn7H+Q+qgf8AIDf2P8h9UbQPil9DtpPI+i9ldy9Vwr/+QOVN/oln/jiq64pho2l1z3CPUqWgrDJn0QMPMKjnMGrvVfLa34rxT9w0dBPqUnUxdWp79R7vEgeQU5fYePjt9s+n4zj+Hp+89s8pk+Quuc4j+N3G1FhP+zrDvgXPouQp4Uj7+5TdKkNCg5Mvj48V3sDi+I165mo8uH7BZv8A47+MoYpwPoNVoHCSPu/eoZhdzNunL+1U+zXBJLQm5htseQP07vVQ3hwPaAIOuZtjc+q1n4OTm+PpoiU8Kbx09D/KFMLaYrhqLmiTDhzGt9ZCa9kz9p/8QncNQseXzHwsmMw/e3zZ9UHOSBo0/wDGi2Yz4I4wDLyJ3veeacf1VP6XMl5OS+zG5SfsUZwthBAGsHUz/Ch3CmdfNPUwdtlDpCnzzpPYFOV9nPY7g/anMXD9thpyI8ko7DZQAQW2sAIhdQWzcoZoB1iJlNDzJJ1JWi6OVrs5E0Q6QGzHLUlQ/BW5aTzP1XZuwFKIDYHS0rOrYFw0AI6a6+q3RzxlqxlljI5CpgPL1QHcNM6X5LrhRYdNUpWw4BtrutAezmRgCdYHddCqYP73K6Z2EG/9KPyM39ZRQKRyv5Xoquw3T4LqW4IG0T11VDgC3QCOeUSjZKRz7MEQAXeAHzOwRWYKbm/3otlmDkpxmCMCI693chbI0kYLcDyCuMIRsuiGCspbh1KZE0Y1GhsRB9E1+TtpK0ThQjsoHdTiRyMpmD5IrMPJ5H4hagp81c0gdUVADmZLKRFj8kdlCdLgadJT4oeI66rzKYvFjyU4UHnYkxsd33BXsg5N8ky9l4yx00Q/y/cl4jcjo6jAhuZPkrIZXInxe6MKZenb0VaolWZoqlBr9NE9goUHojtXlQ8eh7IFMqWQEYJd2qM3waoC2KY/Cz22i+/WFmHUnX7/AIXQLFxoh5i0ro+Lmcv0sthJ9FPYiBz1XskK4XmfNby2yop20/leawSRr8UU6+CE33lLJ2Q7DwbRopbTB0M+iJTRcgk2RSEbBgbEfyrupqQrsTUKAbqitCjZT+n75qURlw1TkVFdqIGiHQhvMaxCu/Tz+SWcpYUgjr6eqF7Pv8/4XqKOiG60f//Z"
                    alt=""></div>
            <div class="item"><img
                    src="data:image/jpeg;base64,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"
                    alt=""></div>
            <div class="item"><img
                    src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFRYYGBgaGBgYHBoaGBgYGBgYGBgaGhoYGhgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHzQrJSw0NDQ0NDQ0NDQ0NDQ1NDQ0NDQ0PTQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDY0NDQ0NP/AABEIAPsAyQMBIgACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAADBAECBQYABwj/xAA6EAABAwIEAwUGBgICAgMAAAABAAIRAyEEEjFBBVFhInGBkaETMrHB0fAGFEJS4fEVYgdykqIXIzP/xAAaAQACAwEBAAAAAAAAAAAAAAABAgADBAUG/8QAKhEAAgICAgIBAgYDAQAAAAAAAAECEQMhEjEEQRNRYQUUIjJxoYGx8JH/2gAMAwEAAhEDEQA/ANcUnFXbhStltAckQUguZ+XRr+Qxm4Qo9PCkLSyBUfVa3dMsMUTk2Cbhua9WqNYFn4/jTGDVcdxbj7nyGq1a6JGDkaHH+PC4BXKivmMlKVmOcZNyiYakZURfGPE3MEVtUAsbBNhbFB6WUTTFj1NHal2OTDXJKaGCNKuCg5kjxjO6k4U35XDtd4Fy2dpG6dMVqlZpucgvesbhPFzWB7JhoAzc3bgiBe2osm31FNskXasO+sguqShQSrsYU3Eh4FXZTnZGp0U0ykgQT/Ld6luFPMrQDF7IpxsjYk3Cnmruwh5ppqKiooVszDg+q9+TC0cqnIjxBY4/iLBuEliOPMb+oL5m/G1XblUh7tSU1MyLEdtjPxU0aLAxn4he/RZbMKUzTwh5IUWxxpC73vf7xKszDLSo4I8lo0MD0UosSoxaOCJ2WjQ4cOS2aODATHsgFKGTRjjCQoLCFoVngJR1UFJJ0x0rPUahTYfCUYEPE1SBZS0w0PGugurpPDku1TjMMVEkEXykOLgAAQA6AZJ2JjSBb+k1SYSq16JGXo9pPdp8wtbDYdSLpuJXdWAp4dGFGE5kAUFqtpCc2LtCsEQ0zyUNpnkg0iKZLUTKvNpFXyEJU0FyBZFYNV4XgnBZUtUQiFQoQ4tvCuiKzhfRdG2iFcUQjQ1owafDeiZZw8clsCmFYMQJyM9mDHJHbQhNWQ6lQKAuwDzCSxFdExFVI1DKVseMRTEvJVKVMpgUpTDKKRqy1IpSaiPoSjMpQmWMUUaI3QnSw+VMh/MIwYjYfBOcYaPE2Cq5ONuXQJOPbMrFyWOA1IMd+3qn8NixA7loN4KSLkJbC8Lbkcwk5mOLZ6C7bdWlqzvzsUXbZTKUW9FXYiUTCPBdBSDqZFirYckOBW5ytWgOOjqqeHELxwwUYGrITuVZZSkzG7TFBQCHVw6eyKrxCRclsKkYdZhCXzI/FcUAs6lWlasc+SNULatjcr0qgcplXBJYESEBr1Y1EwGXc6EvUxQCBiap2SjGybpGx1H6jD8VKA+uVas0AIBEqbGjFEOfKHCL7EojKSlFiaBMCcpsVWUE5TZCgJSBhiuGouVSwQQRsZQEchrDcPNi7y+q0SA37srtqhwDh49Cl6pXlPO8nK8jhJ9PRSm5dhKleYKQc6Kv/dv/ALN+Zaf/AFRS5I8UqZWh8wWPa/vE5XDvLXOWSDlOVN9/8g8aWiuLZ2il8qxuK/iN2Z3s2M7LM5a9zg8tBMkACAekoXB/xQys4Me3I82F5a48p2K9VgUo4YprdKzT8clG2jqMPii1a+HxoKw2sV2gjRNki+12USxxkdK2uCs/iWNDRqkGYshZuOqueVU3OS4srjgqViONxBe5FwoIXqeERC0tWnHj4o0VWjRpBFyJCliYRvzS0ITixapWAUe2We1xJRQiNxQV9RLuqE6K7WSispID6QNtMlMU6K18FwWo8A5Q1p3da3ONVr0Pw+we84u6Cw+qZRbM0vJhHVnMezRGYd2uUxzgwuyZgKbRAY23MT6lFH3/AAE3xmeXl/RHKU+G1CJyHxgHyKYZwZ5EktB5T8YXRkf1v4r0bf0EeCK5eVN9UYtPgwjtPv009dUwzhbBEyfG58AtIDf1+ikM+9yjxRU8037FfyrQ2Gtjl39Ss/ENXQNYIusvH0SSS3TcdOY6rjfi3gvLHnBbRbhy06ZjvK4Ti+KqYqo4UjLKZLcoMFxj3tI/hd1VpEnKP1WB77L5bijUw9So0dl0kEHmNwuf+FeOuTlNdHY8am3XYLEVH0w5tQ5nuaWC4OVpAnrslmYAObqQ7bpySNSq4kudJJvJWk3Gy0ZR2u5dt6OljjHjxO1/CnEnVqPa99hyOPPk7y9QVtyuX/49wbnHEGCP/wA9dz211b2RYqxRtWcnNxjkcV6BOKoWhFLEMhVZYS7iCMkTSpkmAmTw4nVNcOwu5WsWquM5JbKMuapVE5p/Cyhf41y6VzQoyhD8xIr+aRxTKSksV2GApyreauWygKc4ZSz1WN5uE9wuUD2aa4ZVLKjXabHuKX2DJ+113R3dQ2svAoWGrZh1t9hF0PitKaatHGao8RNvEqovJ2FgiCxv3KGtiRqCiAFo3NuVL2QANiblFa2BGo9V4aRqOqhCj2w4TptyVg3c6H0Vh97rwChCGttG3MID6Ol7TPVHJXkKIDe3oCfl0XH/AIs/B/tw6pRympF2uMZu52x7/RdmP6UVPJBxRZiyzxy5RZ+e8fwetSvUovZB3HZ/8tD5qvDsO57w1jbnY7bEmNgv0C+g1whzQ4HmAZSzOEUWmWsa0/6iJ71W8SZ0V+JzrrZg8A4cKNPI25mXO0zHn0EJ3F4UuGYDtDUcx9VtflxtZV9nGoT8FVGB5pOfP2cmWoDxddFxbAgtL26j3hzHNYL2KicWtG7HNTVo3MC8ZQnM0rnaeIIT+HxkrBOUova0JLE+zT9lKn8uqUq0ontFYvjauihqRwDHq4co9ihua5q2NHRTQy16KHAwkmVEem+UtgaOxoVcpBG49FqMcD8f5WW+g4Nb2Y7N+YtomME8RlPOR8x980cM3GTjI5U4p7Q80wplQNFZpWoqINkNxRVFlCAwVYPVHPCqaiFhoKX2U5kuXrxepZKGM4n6Kc40SmZQ58IWHiMZhdeL0qao3IS1TiLBzPcEsskY9uhlBvpGnnUGoso8TbEtEnYH42VaGMc5wbAG51lI/IhaSfY3xS7NOrVhpMSAD5Rdcaakn5cl1eIPYf8A9XfArj86GRmrxIqmFBXphA9orF8rLl6o2qI9h8aW6ov+TWS58Ift1lWJk+KLAzKs55iF57OShdK2gNJ9HmUBum8Lw173C8N5pzCYINGep4BHfiSdLBRtezJkzU6idS1oLI17MLOykc5+hR+H1uyAdY80fE0hqPFGa5RUl6MSdOi2Gq5hMQdCFL642StF+U30Nj8ivPF08J3H7gcdhnYhDc8oL6rW+8QPFJ4nijW+6J5E2E92qE80I9sZQcukaElQXganT0WHUx73fqAH+sXPK6oC4zJN7n78vJZpeZHqKsuWB+2bDscza57wPKdUpV4w2DlBnqPWxSOTd0d8x5jyUFoAiINxO4HJUS8ubWtDrDEO/iFQidIjTc7z0QK1Z7zLjJnQSQB0Eq7qZgkC3Pcnv5Kkjkf5G3xWeeSctNssUYrpBPZmBcwLwevRZTMa81yzL2O1e5giPKVrAGxjW1rqW4B0uIA52vn6G33KVxlJ6sNpdgmZp0AH35p3hDw5xsQRzHXmi/4wOBuWyBve20pzC4csETNgL9BzWzB481JSl0U5MkXGkXqslrhzaR5hcpjcC5h5hdbUMNKTe4GxW6cbK8WZweujkJQ3VYK1eKcOI7TPJYM3uszjvZ1MeSM42gprSvezVWM5Ikp1SHoaDVp4bCNY3O/wCHw/Chzp/SLlVx9cvflHuhWydI5+bI/2r/JFWuXmTor0GlxhqWa3McoWthm5S0N1BCp7M3RoU6DmBubzWxTMjvS9Fudpzc4HTqqYYlrsv9BPiaSTXTFlvXtFcRSLTYW9Ehjy6LExHOFu1xLSsfFiw5+io8qPCLpsswu2Yx3nu7/NAyyYDrgTEmB9Uy5suuWxr2XHyXqTHXhgkS0RvfmuXFtmsA94aBJ57QfNRTxQeSGOGtyBICeGDn3xMXH0t80XD4BkyWAHyBWiGDJJ6QjnFdidGkS13IQ3/sfrfQc03RwgaSXaEazbMeQWjRwzWgAAADQcjz71XEyB3ad/ctEsCxw5S9FXyOTpGeKDBOUOn5eO/ei4PDhxMgiOvxS76JcdfDQkn4LaoUgxoA/tVeJCWSdySSX9jZZUqT2RTw7W6D7OqKGhAq45jLE+Un4JWtxQfobPU29F0ZZcWNVa/hFChOXo0jZQsJ/EXmxcBeLDXzQHVnETLjub/cqmXmxXSbHWB+2buLPYdHT4rOZUnVRRe4UZ0zEWQHvm41ViyckpfVCONNoYc6NdFica4d+tniPmtJtWbKWvnslFpNDY5yhK0ckypyui5ijcSwvs32HZNx9Et7RJR04z5KzrGsyURzddZrGQ0ncrY4qNG8gEg6noEZ9nLvlsthaOVubcp3Dsi+5UZLgck1Sb2u5RaFZp4V+oQcQwh09ZCG1xFwnbPb92KMUpR4+0B6dlcNVJF/4Pcg4qkJ1XqZLTHVErNjWE9LJGpegftlaM9uEYNGj4+KYYwDQD4JfEY9jBJM9BFzyStbi0fpi2508NFVzwYtKv8FtTkaeW8ga2N9h0JsiBqwDxF+Y3m20QJ0PRVOLe8g5zrAFwLdEj82C6TD8MvbOiBSdeu2ZBDj1dAHlJWW1r3AwTYXEk66fBHbgXtAJOxJ/hJPyJZFqI0YJPbL+0gh36uegnu80viKriTdx6TomW4F7jaIO5PqjP4bIgm9pItMKlYssotJOhuUEzMywfvZSG5pBtpAEXWszh7dSSfki/lWNEx5pl4s63SQHmRiNw8m7SeUixBCI2i4iA0WNgBATlbiDR7onu0lJOrucR2o7rWVUoQi6Tv+B1JtbVD+PpD2OsFsGPksT20XWlj6uWm1v7jfuWBcOMmx0C3yfVfRFCQ098FM0r3SNBhcDOy0cM3soxYJAON4fNSJGre14brkvar6A5mZhHMEeYXz/8sUzL8GSkd/xRvaSrW9oLQrw9jXjdoSWXQoTW7M8eqDtb20xSGqDuCmWG6iAw1O7UTDPyuy8/ih0dCFM36qP9LUkDu0MYmnNxYrG4pWy+86ATpe52W3nJFlmYvDlxEQL3JE26eICr8rHKUbh7HwySdSMYsItEEbWjpfbXXvVXCGmRmOYDcgCYJjl1U8Sw5DiZ3jyGwWbTwr84u8CSTr8PJci2pOKX2Numrs18Ph3usBDTH+oHOBF1pUOHsF4na5lU4TlZRZnfeJJJkybkX74TgxbInMF0sWGKVyavszSnJukitek4js+hhZFemDIeHAwTeQQBv1T7uJi+WLRqdpvKq/FB05otfnHiqfJ+Jq73/QYcl6I4U94YXPmATlze8QNytFuLba8HrZZD8eB7ump3lIYnFON/G+n9IQ8/hjSSbojw8nbOhfj2gkAt/vRY+KxpfYmwOgWe/FHp3NMA+qKx73GSwgA2vZJLzJ5k9a+w8cSjsuXgTmMDa6pTqMkGTfmYjrCYdgswvIHIc0RmAYLxJ5m6MMMnT/2RySJ4q8Oa0NvG6SZhLglab2aBR7O631bsoukK0qcEpig2ytTZqUZjLd6aKFkwlMWXEfmmLsOJVxTovebZWOPjFvWF8qzn95TMuww5Kz6dwHFtcDSPUt+YR61ItdBXNUXFpDmm4vI26rq8Di2V2QYzjUfMdEVUlXsPkYnF8l17B0uSOzTqFR9EtKuwzfflzSpVpmdhmOi6K5u6AOfoiNfHUfBH1TFILtpIMIL6ha0EkkzyGk2ATD27jzG3VDxAnL1Pms2RygnT/gtjT9GViq5DwRpFwQCTE+WqXdiTqTYTf3YvohcTPtGPh2RxsCCLQbCx6LOwNOaWR7y8nsyAbA7z01lYOUpN77NKSSGqXEGVHEMfJb390idtER79soMgyZiNvNZ/DOAPY4uz3Mi7Tp4FbNLhlyXPLulg0dwVkcU36A5RXsRfVIgTYalxgx81FPiI90X8QRHgtT/E0yZcwOP+0n4pqng2DRoHgn/KuXbF+RGAWPLoaDuL2Gvqi0ODOMZ3kgGY/nkugazp6KwYrY+NFd7EeViNLBMboPmfNMNYjZVGVXRxqOkhHKymVWDeavlUEKyqBZTLuq5PVF71Gl90aBZQt0CKwKGN/lLcV4izD0y9xEx2WzBcdgEy1sCTk6Rg/jXHiG0AbmHP6D9I8TfwXG5R9hFrVX1Hue/3nOkzbXl8F72J5+oVMpq+zr4sfCCR0jX2g/Ta6CMU5pzMJDm6H5E79ylx8PjAVXCBoQCLQJJ6BOw0umdTwjj7K4DHwx/LZ3/U/LVab6BFxcL5pi8MSNC2fiCLp/hn4uqUYa+ajAYn9Y7v3ab+aKmpL9RjzeK1uH/h3Qf58/qiDy67JHh3GcPiB2HjNu02cPA3TxokaGU9fTZidp01RaPD4FLYqg5xF4aNI1/hFzEa2+CkP+x9FVOCkqY0ZNbRms4JTBJABJM3vJ1kpluFA0EI7j96FSHnr8UI44R6QXKT9ghTVsiIH9ymenqnpAsqAvZVaeignp6ogKyvKxd3KpPX0UIec211SeQVifsqEpD0ePwXlBP3/KkNJTEI9T6KW0ybrz3tYJcQAOdgFyfHvxo1gLMOM7tM/wChvX/buHmhpdjxhKT0jf4rxSnh2FztTo0e84/e6+bcV4g/EvLqg6NbMZByH3dZtTHVXvL6v/2HQuHvDeC3kOSYw72OcHiHWII+EjoUkpN9HQw4YwW+wbQ9gzNOcTpuAN0T/JD7hGyTOWBIbHeNyfJT+UP7Wpf5RfX3N4uk6c5P05L1OidROu/OEapSA0Ppy1/tD9q4wRYTbYkR8PvRO7rRE0LvYXWuBBBJ1jQ5evVLV8MdGCADAgkrRAdceehiJ35oL6Um+/f9jZVsOjAqUHAyJBHKx15i42WhgPxZiqJDZ9o0bP1AHJw+cprEUd3GwG/wCyq9BxEU220k7X+OvijGXsrljU1s7PBfj6i6G1Wlh7sw8wt7DcTw9USx7T3EL5J+Tiezc6zrySzsOQZbIOttR4hWKTZll4q9aPt2QHR3zXvZHofRfG6PFMSz3Kr46nN8Vo0PxliWe9ld3iEeX2KX48l0z6iKbu/xC9B5H0Xzyl+Pav6qfk76hMs/5B503jy+qFr7ivDM7i/L0U5+nouL/wDkFn7H+Q+qgf8AIDf2P8h9UbQPil9DtpPI+i9ldy9Vwr/+QOVN/oln/jiq64pho2l1z3CPUqWgrDJn0QMPMKjnMGrvVfLa34rxT9w0dBPqUnUxdWp79R7vEgeQU5fYePjt9s+n4zj+Hp+89s8pk+Quuc4j+N3G1FhP+zrDvgXPouQp4Uj7+5TdKkNCg5Mvj48V3sDi+I165mo8uH7BZv8A47+MoYpwPoNVoHCSPu/eoZhdzNunL+1U+zXBJLQm5htseQP07vVQ3hwPaAIOuZtjc+q1n4OTm+PpoiU8Kbx09D/KFMLaYrhqLmiTDhzGt9ZCa9kz9p/8QncNQseXzHwsmMw/e3zZ9UHOSBo0/wDGi2Yz4I4wDLyJ3veeacf1VP6XMl5OS+zG5SfsUZwthBAGsHUz/Ch3CmdfNPUwdtlDpCnzzpPYFOV9nPY7g/anMXD9thpyI8ko7DZQAQW2sAIhdQWzcoZoB1iJlNDzJJ1JWi6OVrs5E0Q6QGzHLUlQ/BW5aTzP1XZuwFKIDYHS0rOrYFw0AI6a6+q3RzxlqxlljI5CpgPL1QHcNM6X5LrhRYdNUpWw4BtrutAezmRgCdYHddCqYP73K6Z2EG/9KPyM39ZRQKRyv5Xoquw3T4LqW4IG0T11VDgC3QCOeUSjZKRz7MEQAXeAHzOwRWYKbm/3otlmDkpxmCMCI693chbI0kYLcDyCuMIRsuiGCspbh1KZE0Y1GhsRB9E1+TtpK0ThQjsoHdTiRyMpmD5IrMPJ5H4hagp81c0gdUVADmZLKRFj8kdlCdLgadJT4oeI66rzKYvFjyU4UHnYkxsd33BXsg5N8ky9l4yx00Q/y/cl4jcjo6jAhuZPkrIZXInxe6MKZenb0VaolWZoqlBr9NE9goUHojtXlQ8eh7IFMqWQEYJd2qM3waoC2KY/Cz22i+/WFmHUnX7/AIXQLFxoh5i0ro+Lmcv0sthJ9FPYiBz1XskK4XmfNby2yop20/leawSRr8UU6+CE33lLJ2Q7DwbRopbTB0M+iJTRcgk2RSEbBgbEfyrupqQrsTUKAbqitCjZT+n75qURlw1TkVFdqIGiHQhvMaxCu/Tz+SWcpYUgjr6eqF7Pv8/4XqKOiG60f//Z"
                    alt=""></div>
            <div class="item"><img
                    src="data:image/jpeg;base64,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"
                    alt=""></div>
            <div class="item"><img
                    src="data:image/jpeg;base64,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"
                    alt=""></div>
            <div class="item"><img
                    src="data:image/jpeg;base64,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"
                    alt=""></div>
            <div class="item"><img
                    src="data:image/jpeg;base64,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"
                    alt=""></div>
            <div class="item"><img
                    src="data:image/jpeg;base64,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"
                    alt=""></div>
            <div class="item"><img
                    src="data:image/jpeg;base64,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"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
            <div class="item"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLvg-27vlWWqBPyXAgiP4USCo1pRvuUfWLJw&usqp=CAU"
                    alt=""></div>
        </div>
    </div>


    <div class="main-container">
        <?php
    $con = mysqli_connect('localhost', 'root', '', 'displayupload');
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $displayquery = "SELECT `username`, `image`, `percantage` FROM cakes";
    $querydisplay = mysqli_query($con, $displayquery);

    if (!$querydisplay) {
        die("Query failed: " . mysqli_error($con));
    }

    if (mysqli_num_rows($querydisplay) > 0) {
        while ($row = mysqli_fetch_assoc($querydisplay)) {
    ?>

        <div class="mainbox">

            <div class="box">
                <div class="image-box">
                    <img src="<?php echo $row['image']; ?>" alt="Image" />
                </div>
                <div class="name-box">
                    <h1>
                        <?php echo $row['username']; ?>
                    </h1>
                </div>
                <div class="percentage-box">
                    <h1>RS:
                        <?php echo $row['percantage']; ?>
                    </h1>
                </div>
                <div class="percentage-box">
                    <button class="button" onclick="showBuyForm('<?php echo $row['username']; ?>')">Buy Now</button>
                </div>

            </div>
        </div>
        <div id="buyFormModal" class="modal">
            <div class="modal-content">
                <!-- Your buy form content goes here -->
                <h2>Buy Form</h2>
                <div class="main-container">
                    <!-- Your existing PHP loop -->
                    <?php
            // ... (Your existing PHP loop code)
            ?>

                    <!-- Form for additional information -->
                    <div class="mainbox1">
                        <div class="box1">
                            <form id="additionalInfoForm" action="process_form.php" method="post">
                                <h2 style="text-align: center;">Add Additional Information</h2>

                                <label for="slotName">Slot Name:</label><br>
                                <input type="text" id="slotName" name="slotName" required><br>

                                <label for="phoneNumber">Phone Number:</label><br>
                                <input type="tel" id="phoneNumber" name="phoneNumber" required><br>

                                <label for="address">Address:</label><br>
                                <textarea id="address" name="address" rows="4" required></textarea><br>

                                <label for="quantity">Quantity:</label><br>
                                <input type="number" id="quantity" name="quantity" required><br>

                                <label for="areaPincode">Area Pincode:</label><br>
                                <input type="text" id="areaPincode" name="areaPincode" required><br>

                                <label for="email">Email ID:</label><br>
                                <input type="email" id="email" name="email" required><br>
                                <br><button type="submit" class="button" style="margin-left: 40%;">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <p>Username: <span id="buyFormUsername"></span></p>
                <!-- Add more form fields as needed -->
            </div>
        </div>
        <?php
        }
    } else {
        echo "No records found.";
    }
    mysqli_close($con);
    ?>
    </div>
    <header>
        <h2>About Us - [Your Cake Business Name]</h2>
    </header>

    <section>
        <img src="cakeimg/1.jpg" alt="[Your Cake Business Name] Image">
        <img src="cakeimg/1.jpg" alt="[Your Cake Business Name] Image">
        <img src="cakeimg/1.jpg" alt="[Your Cake Business Name] Image">
        <p>Welcome to [Your Cake Business Name], where we turn your sweet moments into unforgettable memories. Founded
            in [insert year], we take pride in crafting delicious and visually stunning cakes for all your celebrations.
        </p>

        <p>At [Your Cake Business Name], we believe in using only the finest ingredients to ensure the highest quality
            in every bite. Our dedicated team of bakers and decorators brings a perfect blend of artistry and precision
            to create cakes that not only taste amazing but also look like works of art.</p>

        <p>Whether it's a birthday, wedding, anniversary, or any special occasion, we are committed to making your
            moments extra special. Our customizable options allow you to tailor your cake to suit your unique
            preferences.</p>

        <p>Thank you for choosing [Your Cake Business Name]. We look forward to being a part of your joyous
            celebrations!</p>
    </section>
    <footer>
        &copy; 2023 [Your Cake Business Name]. All rights reserved.
    </footer>
</body>

</html>
<script>
    function showBuyForm(username) {
        // Set the username in the modal content
        document.getElementById('buyFormUsername').innerText = username;
        // Show the modal
        document.getElementById('buyFormModal').style.display = 'flex';
    }

    // Function to close the modal
    function closeBuyForm() {
        document.getElementById('buyFormModal').style.display = 'none';
    }
</script>
<script>
    function showBuyForm(username) {
        document.getElementById('buyFormUsername').innerText = username;
        document.getElementById('buyFormModal').style.display = 'flex';

        // Call function to fetch and display random image
        fetchRandomImage();
    }

    function closeBuyForm() {
        document.getElementById('buyFormModal').style.display = 'none';
    }

    function fetchRandomImage() {
        // Make an AJAX request to fetch a random image URL from the server
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Parse the JSON response
                var data = JSON.parse(xhr.responseText);

                // Display the random image in the container
                displayRandomImage(data.image);
            }
        };

        xhr.open("GET", "get_random_image.php", true);
        xhr.send();
    }

    function displayRandomImage(imageUrl) {
        // Create an image element and set its source
        var imgElement = document.createElement("img");
        imgElement.src = imageUrl;

        // Get the container and append the image
        var randomImageContainer = document.getElementById("randomImageContainer");
        randomImageContainer.innerHTML = ""; // Clear previous content
        randomImageContainer.appendChild(imgElement);
    }
</script>
<script>
    const slides = document.querySelectorAll(".slide");
    const totalSlides = slides.length;
    var counter = 0;

    slides.forEach(
        (slide, index) => {
            slide.style.left = `${index * 100}%`
        });

    const goPrev = () => {
        counter--;
        if (counter < 0) {
            counter = totalSlides - 1;
        }
        slideImage();
    }

    const goNext = () => {
        counter++;
        if (counter === totalSlides) {
            counter = 0;
        }
        slideImage();
    }

    const slideImage = () => {
        slides.forEach(
            (slide) => {
                slide.style.transform = `translateX(-${counter * 100}%)`
            })
    }
    const autoSlide = () => {
        counter++;
        if (counter === totalSlides) {
            counter = 0;
        }
        slideImage();
    }

    autoSlideInterval = setInterval(autoSlide, 3000); 
</script>