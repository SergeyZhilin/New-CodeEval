<section class="wrapper style2 spotlights">
            <div class="inner">
              <h2>{{ hcontacts }}</h2>
              <p>{{ pcontacts }}</p>
              <div class="split style1">
                <section>
                  <form method="post" action="registration.php">
                    <div class="field">
                      <label for="name">{{ login }}</label>
                      <input type="text" name="name" id="name" required="" />
                    </div>
                    <div class="field">
                      <label for="email">{{ email }}</label>
                      <input type="email" name="email" id="email" required="" />
                    </div>
                    <div class="field">
                      <label for="password">{{ password }}</label>
                      <input type="password" name="password" id="password" required="" />
                    </div>
                    <ul class="actions">
                      <li><button type="submit" name="submit">{{ sendmes }}</button>
                    </ul>
                  </form>
                </section>
                <section>
                  <ul class="contact">
                  <form method="post" action="registration.php">
                    <div class="field">
                      <label for="name">{{ username }}</label>
                      <input type="text" name="loginname" id="loginname" required="" />
                    </div>
                    <div class="field">
                      <label for="password">{{ password }}</label>
                      <input type="password" name="loginpassword" id="loginpassword" required="" />
                    </div>
                    <li><button type="submit" name="loginsubmit" id="loginsubmit">{{ login }}</button>
                    </form>
                      <h3>{{ social }}</h3>
                      <ul class="icons">
                        <li><a href="../#" class="fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="../#" class="fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="../#" class="fa-github"><span class="label">GitHub</span></a></li>
                        <li><a href="../#" class="fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="../#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
                      </ul>
                    </li>
                    
                  </ul>
                </section>
              </div>
            </div>
          </section>