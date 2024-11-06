<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      /*desktop */
      @media (min-width: 1024px) {
        body {
          background-repeat: no-repeat;
          background-position: top right;
          background-image: url("biking.jpg");
        }

        #hideOnDesktop {
            display: none;
        }
    }

    .dropdown__header * {
  padding: 0;
  margin: 0;
}
.dropdown__header {
  display: flex;
  align-items: center;
  background: lightblue;
}

.dropdown__header strong {
  margin-left: 5px;
  margin-right: auto;
  font-size: 1.6rem;
}

.dropdown__header .dropdown__categories,
.dropdown__header .dropdown__menu {
  display: flex;
  list-style: none;
  padding: 0;
  margin: 0;
}

.dropdown__header li {
  padding: 10px;
  position: relative;
}

.dropdown__header li:hover {
  background: #d2f2fc;
}

.dropdown__header .dropdown__category .dropdown__menu {
  display: none;
  position: absolute;
  background: #ebfaff;
  width: 200px;
  top: 50px;
  right: 0;
}

.dropdown__header .dropdown__category:hover .dropdown__menu {
  display: block;
}
    </style>
    <meta charset="utf-8" />
    <title>TrentonTompkins.com :: Author, Web Developer and Internet Marketer</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    </head>
    <body style="padding: 0px; margin: 0px">

        <header style="height: 20px" class="dropdown__header">
            <strong>Logo</strong>
            <ul class="dropdown__categories">
              <li class="dropdown__category">
                <span>Cat 1</span>
                <ul class="dropdown__menu">
                  <li>Cat 1 Thing</li>
                  <li>Cat 1 Thing</li>
                  <li>Cat 1 Thing</li>
                  <li>Cat 1 Thing</li>
                </ul>
              </li>
              <li class="dropdown__category">
                <span>Cat 2</span>
                <ul class="dropdown__menu">
                  <li>Cat 2 Thing</li>
                  <li>Cat 2 Thing</li>
                  <li>Cat 2 Thing</li>
                  <li>Cat 2 Thing</li>
                </ul>
              </li>
            </ul>
          </header>
          <br clear=""all">



      <div
        style="
          display: flex;
          flex-direction: row;
          border: 1px red solid;
          flex-wrap: wrap;
          justify-content: flex-start;
          height: 600px;
        "
      >
        <div
          style="
            height: 200px;
            border-radius: 30px;
            width: 480px;
            font-family: 'Poppins', sans-serif;
            background-color: #00668f;

            color: whitesmoke;
          "
        >
          <h1 style="text-indent: 20px;"">TrentonTompkins.com</h1>
        </div>

        <div id="hideOnDesktop" style="width: 400px">
          <img src="biking.jpg" style="width: 400px; height: 369px" />
        </div>

        <div style="width: 1; border: 1px blue solid">
            <video width="480" height="280" controls>
                <source src="test.mp4" type="video/mp4">
              </video>
        </div>
      </div>
    </body>
  </head>
</html>
