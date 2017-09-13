<html>
  <head>
    <link rel="stylesheet" href="css/reveal.css">
    <link rel="stylesheet" href="css/theme/<?php print $_GET['theme'] ? $_GET['theme'] : 'white';?>.css">
  </head>
  <body>
    <div class="reveal">
      <div class="slides">
        <section>
          <h2>Symfony in Drupal8:</h2>
          How much and what does Drupal inherit from Symfony?
          <br>
          <br>
          <br>
          <h3>Dipak Yadav</h3>( @dipakmdhrm )
        </section>
        <section>
          <h2>Me</h2>
          <br>
          <div style="text-align: left">
            <ul>
              <li>Dipak Yadav <strong>( @dipakmdhrm )</strong></li>
              <li>Drupal Developer (Rotary International)</li>
              <li>
                <a href="https://twitter.com/dipakmdhrm">Twitter</a> |
                <a href="https://www.drupal.org/u/dipakmdhrm">Drupal.org</a> |
                <a href="https://github.com/dipakmdhrm">Github</a>
              </li>
              <li><a href="http://www.dipakyadav.com" target="_blank">http://www.dipakyadav.com</a></li>
            </ul>
          </div>
        </section>
        <section>
          <h2>You</h2>
          <br>
          <div style="text-align: left">
            <ul>
              <li>Drupal 7 developers</a></li>
              <li>Symfony Enthusiasts</a></li>
              <li>Understand OOP Baiscs</li>
            </ul>
          </div>
        </section>
        <section>
          <h2>Overview</h2>
          <br>
          <div style="text-align: left">
            <ul>
              <li>Intro to Symfony</a></li>
              <li>Drupal 8 with Symfony (What's changed)</a></li>
              <li>Drupal 8 Structure</li>
              <li>Symfony Components in Drupal8</li>
            </ul>
          </div>
        </section>
        <section>
          <section>
            <h2>Symfony</h2>
            <ul>
              <li>Set of PHP components.</li>
              <li>Web application framework.</li>
              <li>Philosophy</li>
              <li>Community</li>
            </ul>
          </section>
          <section>
            <h2>Symfony Components</h2>
            <ul>
              <li>Component / Library / Package</li>
              <li>Eg.
                <ul>
                  <li>Config</li>
                  <li>Form</li>
                  <li>Http-Foundation</li>
                </ul>
              </li>
              <li>Independent or Loosely coupled</li>
              <li>Can be used in any PHP application
                <ul>
                  <li>
                    Even Drupal 7
                  </li>
                </ul>
              </li>
            </ul>
          </section>
          <section>
            <h2>Symfony Framework</h2>
            <ul>
              <li>Web Application Framework built using components</li>
              <ul>
                <li>Plus few other PHP libraries like Twig, Swiftmailer etc</li>
              </ul>
              <li>Fully functional Application.</li>
              <li>Can be extended using bundles.</li>
            </ul>
          </section>
          <section>
            <h2>Symfony Philosophy</h2>
            <ul>
              <li>Use best practices</li>
              <li>Standardization</li>
              <li>Interoperability of applications</li>
            </ul>
          </section>
        </section>
        <section>
          <section>
            <h2>Drupal 8 with Symfony</h2>
            <br>
            <h3>What's changed?</h3>
          </section>
        </section>
        <section>
          <section>
            <h3>Site Builders & Content Creators</h3>
            <h2>Almost Nothing</h2>
            <ul>
              <li>Content Types with fields</li>
              <li>Menu & Taxonomy for Categorization</li>
              <li>Create and Place blocks</li>
              <li>User Administration with Roles and Permissions</li>
              <li>Modules & Themes for extendability</li>
            </ul>
          </section>
          <section>
            <h2>Improvements</h2>
            <ul>
              <li>Better content authoring experience
                <ul>
                  <li>CKEditor by default</li>
                  <li>Quick Edit</li>
                </ul>
              </li>
              <li>Views in core</li>
              <li>New fields by default</li>
                <ul>
                  <li>Links, Phones, Datetime etc</li>
                </ul>
              <li>Configuration Management</li>
            </ul>
          </section>
        </section>
        <section>
          <section>
            <h2>Drupal Programmers</h2>
            <br>
            <h3>A complete architectural overhaul under the hood</h3>
          </section>
          <section>
            <table>
              <th>
                <td>Drupal 7</td>
                <td>Drupal 8</td>
              </th>
              <tr>
                <td>Heavily dependent on hooks</td>
                <td>Most of the hooks are deprecated. Events are used</td>
              </tr>
            </table>
          </section>
        </section>
        <section>
          <section>
            <span style="font-size: 2.11em;"><code>HttpFoundation</code></span>
            <br>
            <br>
            <em>"The HttpFoundation component defines an object-oriented layer for the HTTP specification."</em>
            <br>
            <br>
            <ul>
              <li>PHP global variables (eg. <code>$_GET, $_POST</code> etc.) are replaced by Request object.</li>
              <li>Functions like <code>echo, header()</code> are replaced by the Response object.</li>
            </ul>
          </section>
          <section>
            <img data-src="images/http-protocol-flow.jpg">
          </section>
          <section>
            <h3>Plain PHP</h3>
            <table>
              <tr>
                <th>Request</th>
                <th>Response</th>
              </tr>
              <tr>
                <td>
                  <ul>
                    <li><code>$_GET</code></li>
                    <li><code>$_POST</code></li>
                    <li><code>$_COOKIE</code></li>
                  </ul>
                </td>
                <td>
                  <ul>
                    <li><code>echo / print</code></li>
                    <li><code>header()</code></li>
                    <li><code>setcookie</code></li>
                  </ul>
                </td>
              </tr>
            </table>
          </section>
          <section>
            <h3>Drupal 7</h3>
            <table>
              <tr>
                <th>Request</th>
                <th>Response</th>
              </tr>
              <tr>
                <td>
                  <ul>
                    <li><code>drupal_get_query_parameters</code></li>
                    <li><code>$form_state['input'] / $form_state['values']</code></li>
                    <li><code>$_COOKIE</code></li>
                  </ul>
                </td>
                <td>
                  <ul>
                    <li><code>render() / drupal_render() (theme())</code></li>
                    <li><code>drupal_send_headers()</code></li>
                    <li><code>user_cookie_save()</code></li>
                  </ul>
                </td>
              </tr>
            </table>
          </section>
          <section>
            <h3>Symfony</h3>
            <table>
              <tr>
                <th>Request</th>
                <th>Response</th>
              </tr>
              <tr>
                <td>
                  <code>Request $request</code>
                  <ul>
                    <li><code>$request['query']</code></li>
                    <li><code>$request['request']</code></li>
                    <li><code>$request['cookies']</code></li>
                    <li><code>$request['files']</code></li>
                    <li><code>$request['server']</code></li>
                  </ul>
                </td>
                <td>
                  <code>Response $response</code>
                  <ol>
                    <li><code>new Response($content, $status_code, $headers_array)</code></li>
                    <li><code>$response->send()</code></li>
                  </ol>
                </td>
              </tr>
            </table>
          </section>
        </section>
        <section>
          <span style="font-size: 2.11em;"><code>dependency-injection</code></span>
          <br>
          <ul>
            <pre>
              Class Car() {
                function __construct() {
                  $this->transmission = new Transmission();
                  // .....
                  // .....
                }
              }
            </pre>
          </ul>
        </section>
      </div>
    </div>
    <script src="js/reveal.js"></script>
    <script>
      Reveal.initialize();
    </script>
  </body>
</html>
