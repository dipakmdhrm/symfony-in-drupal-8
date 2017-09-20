<html>
  <head>
    <link rel="stylesheet" href="css/reveal.css">
    <link rel="stylesheet" href="css/theme/<?php print $_GET['theme'] ? $_GET['theme'] : 'white';?>.css">
    <link rel="stylesheet" href="css/custom.css">
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
              <li>Sr Software Developer (Vidushi Infotech)</li>
              <li>Consultant (Rotary International)</li>
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
          <h2>Symfony in Drupal8:</h2>
          How much and what does Drupal inherit from Symfony?
          <br>
          <br>
          <br>
          <h3>Dipak Yadav</h3>( @dipakmdhrm )
        </section>
        <section>
          <h2>Overview</h2>
          <br>
          <div style="text-align: left">
            <ul>
              <li>Drupal development before Drupal 8</a></li>
              <li>Introduction to Symfony</a></li>
              <li>Philosophy of Symfony: How it changes Drupal</li>
              <li>Symfony Components in Drupal 8</li>
            </ul>
          </div>
        </section>
        <section>
          <h2>Glossary</h2>
          <br>
          <div style="text-align: left">
            <ul>
              <li>Controller
                <ul>
                  <li style="font-size: 0.8em">PHP function that reads a Request and returns a Response</li>
                </ul>
              </li>
              <li>PHP-FIG
                <ul>
                  <li style="font-size: 0.8em">Standards body for PHP</li>
                </ul>
              </li>
              <li>PSRs
                <ul>
                  <li style="font-size: 0.8em">PHP Standards recommended by PHP-FIG</li>
                </ul>
              </li>
            </ul>
          </div>
        </section>
        <section>
          <section>
            <h2>Drupal development before Drupal 8</h2>
          </section>
          <section>
            <h2>Drupal Island and NIE</h2>
            <img data-src="images/Yeah-Drupal!.jpg">
          </section>
          <section>
            <h2>Drupal Island and NIE</h2>
            <img data-src="images/Frustated.jpg">
          </section>
          <section>
            <h2>Drupal Island and NIE</h2>
            <img data-src="images/hooks-hooks-everywhere.jpg">
          </section>
          <section>
            <h2>Drupal Island and NIE</h2>
            <img data-src="images/different.jpg">
          </section>
          <section>
            <h2>Drupal Island and NIE</h2>
            <img data-src="images/php-oop.png">
          </section>
          <section>
            <h2>Drupal Island and NIE</h2>
            <img data-src="images/problem-solving.jpg">
          </section>
          <section>
            <h2>Drupal Island and NIE</h2>
            NIE = Not Invented Here
            <img data-src="images/nie.jpg">
          </section>
          <section>
            <h2>Drupal Island and NIE</h2>
            <img data-src="images/drupal-island-php-mainland.png">
          </section>
          <section>
            <h2>Getting off the island and PFE</h2>
            <img data-src="images/pfe-projects-in-drupal.png">
          </section>
        </section>
        <section>
          <section>
            <h2>Symfony</h2>
            <img data-src="images/symfony-def.png">
          </section>
          <section>
            <h2>Symfony Components</h2>
            <ul>
              <li>Component : PHP Library</li>
              <li>Independent or Loosely coupled</li>
              <li>Reusable: can be used in any PHP application
                <ul>
                  <li>
                    Even Drupal 7
                  </li>
                </ul>
              </li>
              <li>Eg.
                <ul>
                  <li>Config</li>
                  <li>Form</li>
                  <li>Http-Foundation</li>
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
              <li>Fully functional Application.
              <ul>
                <li>Although, pretty useless out of the box.</li>
              </ul>
              </li>
              <li><strong>Drupal is not using Symfony Framework</strong></li>
            </ul>
          </section>
          <section>
            <h2>Symfony Community</h2>
            <img data-src="images/symfony-community.png">
          </section>
          <section>
            <h2>Symfony Events</h2>
            <img data-src="images/symfony-events.png">
          </section>
        </section>

        <section>
          <h2>Symfony Components in Drupal 8</h2>
        </section>
        <section>
          <section>
            <h2>HttpFoundation</h2>
          </section>
          <section>
            <h3>HTTP</h3>
            <img data-src="images/http-protocol-flow.jpg">
          </section>
          <section>
            <h3>Front Controller</h3>
            <img data-src="images/front-controller.jpg">
          </section>
          <section>
            <h3>Drupal 7 index.php</h3>
            <img data-src="images/drupal-7-index-php.png">
          </section>
          <section>
            <h3>Drupal 7 index.php</h3>
            <img data-src="images/drupal-7-index-php-request-response.png">
          </section>
          <section>
            <h3>Drupal 8 index.php</h3>
            <img data-src="images/drupal-8-index-php.png">
          </section>
          <section>
            <h3>Drupal 8 index.php</h3>
            <img data-src="images/drupal-8-index-php-request-response.png">
          </section>
          <section>
            <h3>HttpFoundation</h3>
            <ul>
              <li><code>HttpFoundation\Request</code></li>
              <li><code>HttpFoundation\Response</code></li>
            </ul>
          </section>
          <section>
            <h3>HttpFoundation\Request</h3>
            <ul>
              <li><code>$request = Request::createFromGlobals();</code></li>
              <li>Gathers request data from PHP globals
                <ul>
                  <li><code>$request->query ($_GET)</code></li>
                  <li><code>$request->request ($_POST)</code></li>
                  <li><code>$request->server ($_SERVER)</code></li>
                </ul>
              </li>
            </ul>
          </section>
          <section>
            <h3>HttpFoundation\Response</h3>
            <ul>
              <li><code>$response = new Response();</code>
                <ul>
                  <li>$content</li>
                  <li>$status_code</li>
                  <li>$response_headers</li>
                </ul>
              </li>
              <li><code>$response->send();</code></li>
            </ul>
          </section>
          <section>
            <h3>API support</h3>
            <ul>
              <li>Drupal 7: No support for creating RESTful APIs</li>
              <li>Drupal 8: API first</li>
            </ul>
          </section>
        </section>
        <section>
          <section>
            <h2>Routing</h2>
          </section>
          <section>
            <h2>Routing</h2>
            <em>"Routing is a process to match a request path to a function, or a controller that then processes that request"</em>
            <br>
            <ul><li>Route:
              <ul><li>"The map from the path to the controller"</li></ul>
            </li></ul>
          </section>
          <section>
            <h2>Route in Drupal 7</h2>
            <img data-src="images/hook-menu.png">
          </section>
          <section>
            <h2>Routing in Drupal 7</h2>
            <img data-src="images/drupal-7-index-php-routing.png">
          </section>
          <section>
            <h2>Routing in Drupal 7</h2>
            <img data-src="images/drupal-7-route-finder.png">
          </section>

          <section>
            <h2>Route in Drupal 8</h2>
            <img data-src="images/routing-yml.png">
          </section>
          <section>
            <h2>Routing in Drupal 8</h2>
            <img data-src="images/drupal-8-index-php-routing.png">
          </section>
          <section>
            <h2>Basic of Routing</h2>
            <img data-src="images/routing-overview.jpg">
          </section>
          <section>
            <h2>Basic of Routing Component</h2>
            <img data-src="images/routing-component-basics.jpg">
          </section>
        </section>
        <section>
          <section>
            <h2>EventDispatcher</h2>
          </section>
          <section>
            <h2>Communication between sub-systems</h2>
            <img data-src="images/sub-system-communication.jpg">
          </section>
          <section>
            <h2>Drupal 7 hooks</h2>
            <code>hook_node_delete()</code>
            <img data-src="images/node-communication.jpg">
          </section>
          <section>
            <h2>Drupal 7 hooks behind the scenes</h2>
            <img data-src="images/hooks-behind-the-scenes.jpg">
          </section>
          <section>
            <h2>EventDispatcher in Drupal 8</h2>
            <ul>
              <li>Facilitates communication between objects</li>
              <li>Events:
                <ul>
                  <li><em>"Event is any action that an object needs to communicate to other objects"</em></li>
                </ul>
              </li>
            </ul>
            <br>
            Eg. Node deletion
          </section>
          <section>
            <h2>EventDispatcher: registering listeners</h2>
            <img data-src="images/bruh-listeners.jpg">
          </section>
          <section>
            <h2>EventDispatcher: event</h2>
            <img data-src="images/bruh-event.jpg">
          </section>
          <section>
            <h2>EventDispatcher: dispatching event</h2>
            <img data-src="images/bruh-dispatching.jpg">
          </section>
          <section>
            <h2>Drupal 8</h2>
            <img data-src="images/events-dispatcher-overview.jpg">
          </section>
          <section>
            <h2>Events Examples</h2>
            <ul>
              <li>Migrate
                <ul>
                  <li><code>migrate.pre_import</code></li>
                  <li><code>migrate.post_import</code></li>
                </ul>
              </li>
              <li>Config
                <ul>
                  <li><code>config.save</code></li>
                  <li><code>config.delete</code></li>
                </ul>
              </li>
              <li>Entity
                <ul>
                  <li><code>entity_type.definition.create</code></li>
                  <li><code>entity_type.definition.delete</code></li>
                </ul>
              </li>
            </ul>
          </section>
          <section>
            <h2>Drupal 8: Events and Hooks</h2>
            <ul>
              <li>Hooks</li>
              <li>Events</li>
              <li>Best of both world... But is it??</li>
            </ul>
          </section>
        </section>

        <section>
          <section>
            <h2>DependencyInjection</h2>
          </section>
          <section>
            <ul>
              <li>Services</li>
              <li>Service container</li>
              <li>Dependency Injection</li>
            </ul>
          </section>
          <section>
            <h2>Services</h2>
            <ul>
              <li>Useful Objects</li>
              <img data-src="images/services-yml.png">
            </ul>
          </section>
          <section>
            <h2>Drupal services examples</h2>
            <ul>
              <li><code>FormBuilder</code>
                <ul>
                  <li><code>getForm()</code></li>
                  <li><code>buildForm()</code></li>
                </ul>
              </li>
              <li><code>UserAuth</code>
                <ul>
                  <li><code>authenticate()</code></li>
                </ul>
              </li>
              <li><code>DBLog</code>
                <ul>
                  <li><code>log()</code></li>
                </ul>
              </li>
              <li><code>current_user</code></li>
            </ul>
          </section>
          <section>
            <h2>Service Container</h2>
            <ul>
              <li>Provides a way to fetch services
                <ul>
                  <li><code>$container->get('service.name')</code></li>
                </ul>
              </li>
              <li>Gathers info about services from all <code>services.yml</code> files</li>
              <li>Uses this info to create services</li>
            </ul>
          </section>
          <section>
            <h2>Dependency Injection</h2>
            <li>Evething (almost) is object</li>
            <li>Objects use objects</li>
            <li>Objects are dependent on objects</li>
          </section>
          <section>
            <h2>Objects should not create dependencies</h2>
            <img data-src="images/object-creating-dependency.png">
          </section>
          <section>
            <h2>Dependencies should be passed</h2>
            <img data-src="images/object-injecting-dependency.png">
          </section>
          <section>
            <h2>Why Dependency Injection?</h2>
            <ul>
              <li>Facilitates encapsulation</li>
              <li>Helps Unit Testing</li>
            </ul>
          </section>
          <section>
            <h2>Service container does DI</h2>
            <ul>
              <li>Takes care of:
                <ul>
                  <li>Creating services</li>
                  <li>Injecting them in objects</li>
                </ul>
              </li>
              <li>Also called as Dependency Injection Container</li>
            </ul>
          </section>
          <section>
            <h2>Drupal 8: 2 containers</h2>
            <ul>
              <li>Dependency Injection container: Preferred & recommended</li>
              <li>Legacy container: For non-OO parts</li>
            </ul>
          </section>
          <section>
            <h2>Using Drupal 8 legacy container</h2>
            <ul>
              <li><code>\Drupal::service('service.name')</code></li>
              <li>Hooks and other procedural code</li>
              <li>Should be avoided if possible</li>
            </ul>
          </section>
        </section>
        <section>
          <section>
            <h2>HTTPKernel</h2>
          </section>
          <section>
            <h2>DrupalKernel</h2>
            <ul>
              <li>Core of Drupal</li>
              <li>Puts everything together</li>
              <li>Extended from <code>HTTPKernelInterface</code></li>
            </ul>
          </section>
          <section>
            <h2>Drupal 8 index.php</h2>
            <img data-src="images/drupal-8-index-php-kernel.png">
          </section>
          <section>
            <h2>DrupalKernel</h2>
            <ul>
              <li>Creating the service container</li>
              <li>Adding services to it, so that they are available for use later</li>
              <li>Passing the request handling to appropriate system</li>
            </ul>
          </section>
        </section>
        <section>
          <section>
            <h2>Console</h2>
            <em>"The Console component eases the creation of beautiful and testable command line interfaces"</em>
          </section>
          <section>
            <h2>Drupal Console</h2>
            <ul>
              <li>Console optimized for Drupal</li>
              <li>Used for debugging & generating skeleton code</li>
              <li>Installed using composer</li>
            </ul>
          </section>
          <section>
            <h2>Drupal Console commands</h2>
            <ul>
              <li><code>generate:module</code></li>
              <li><code>generate:controller</code></li>
              <li><code>generate:form</code></li>
              <li><code>debug:container</code></li>
              <li><code>debug:permission</code></li>
              <li><code>debug:update</code></li>
            </ul>
          </section>
        </section>
      </div>
    </div>
    <script src="js/reveal.js"></script>
    <script>
      Reveal.initialize({
        width: "80%",
        height: "100%",
        margin: 0,
        minScale: 1,
        maxScale: 1
      });
    </script>
  </body>
</html>

<!--

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
            <h2>New Philosophy</h2>
            <br>
            <h3>Not Invented Here to Proudly Found Elsewhere.</h3>
          </section>
          <section>
            <table>
              <tr>
                <th>Drupal 7</th>
                <th>Drupal 8</th>
              </tr>
              <tr>
                <td>Procedural with OOP parts (DBAL, Entities)</td>
                <td>Object Oriented with procedural parts (Hooks)</td>
              </tr>
              <tr>
                <td>Mostly home-grown code. 3rd-party only via modules</td>
                <td>Extensively uses third party code like Symfony/Guzzle/Twig/Doctrine etc.</td>
              </tr>
              <tr>
                <td>Heavily dependent on hooks.</td>
                <td>Hooks removed/deprecated/discouraged. Events, Plugins, info.yml.</td>
              </tr>
              <tr>
                <td>Menu and Routing were tightly coupled (hook_menu)</td>
                <td>Menu and Routing are two different sub-systems</td>
              </tr>
            </table>
          </section>
        </section> -->
