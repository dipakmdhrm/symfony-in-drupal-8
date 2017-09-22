<html>
  <head>
    <link rel="stylesheet" href="css/reveal.css">
    <link rel="stylesheet" href="css/theme/<?php print $_GET['theme'] ? $_GET['theme'] : 'moon';?>.css">
    <link rel="stylesheet" href="css/custom.css">
  </head>
  <body>
    <div class="reveal">
      <div class="slides">
        <section>
          <h2>Symfony in Drupal 8:</h2>
          How much and what does Drupal inherit from Symfony?
          <br>
          <br>
          <br>
          <h3>Dipak Yadav</h3>( @dipakmdhrm )
        </section>
        <section>
          <h2>Who am I?</h2>
          <br>
          <div style="text-align: left">
            <ul>
              <li>Dipak Yadav <strong>( @dipakmdhrm )</strong></li>
              <li>From Pune, India</li>
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
          <h2>Symfony in Drupal 8:</h2>
          How much and what does Drupal inherit from Symfony?
          <br>
          <br>
          <br>
          <h3>Dipak Yadav</h3>( @dipakmdhrm )
        </section>
        <section>
          <h2>D7 &nbsp;1 &nbsp;&nbsp;-&nbsp;&nbsp; 38&nbsp; D8</h2>
          <img src="images/35-projects.png">
        </section>
        <section>
          <h2>Who are you?</h2>
          <ul>
            <li>Drupal 7 developer</li>
            <li>Drupal 8 beginner</li>
            <li>Symfony Enthusiast</li>
            <li>Understand OOP Basics:
              <ul>
                <li>Classes, Objects, Interfaces, Namespaces etc.</li>
              </ul>
            </li>
          </ul>
        </section>
        <section>
          <h2>Overview</h2>
          <br>
          <div style="text-align: left">
            <ul>
              <li>Drupal development before Drupal 8</li>
              <li>Introduction to Symfony</li>
              <li>Symfony Components in Drupal 8</li>
              <li>Drupal 8: Philosophical Changes</li>
              <li>Personal thoughts</li>
            </ul>
          </div>
        </section>
        <section>
          <section>
            <h2>Drupal development before Drupal 8</h2>
          </section>
          <section>
            <h3>Drupal Island and NIE</h3>
            <img data-src="images/Yeah-Drupal!.jpg">
          </section>
          <section>
            <h3>Drupal Island and NIE</h3>
            <img data-src="images/Frustated.jpg">
          </section>
          <section>
            <h3>Drupal Island and NIE</h3>
            <img data-src="images/hooks-hooks-everywhere.jpg">
          </section>
          <section>
            <h3>Drupal Island and NIE</h3>
            <img data-src="images/different.jpg">
          </section>
          <section>
            <h3>Drupal Island and NIE</h3>
            <img data-src="images/php-oop.png">
          </section>
          <section>
            <h3>Drupal Island and NIE</h3>
            <img data-src="images/problem-solving.jpg">
          </section>
          <section>
            <h3>Drupal Island and NIE</h3>
            NIE = Not Invented Here
            <img data-src="images/nie.jpg">
          </section>
          <section>
            <h3>Drupal Island and NIE</h3>
            <img data-src="images/drupal-island-php-mainland.png">
          </section>
          <section>
            <h3>Getting off the island and PFE</h3>
            <img data-src="images/pfe-projects-in-drupal.png">
          </section>
        </section>
        <section>
          <section>
            <h2>Symfony</h2>
          </section>
          <section>
            <h3>Symfony</h3>
            <img data-src="images/symfony-def.png">
          </section>
          <section>
            <h3>Symfony Components</h3>
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
                  <li>Config, Form, HttpFoundation</li>
                </ul>
              </li>
              <li>Drupal 8 uses many Symfony components</li>
            </ul>
          </section>
          <section>
            <h3>Symfony Framework</h3>
            <ul>
              <li>Web Application Framework built using 35 Symfony components</li>
              <ul>
                <li>Plus few other PHP libraries like Twig, Swiftmailer etc</li>
              </ul>
              <li>Fully functional Application.
              <ul>
                <li>Meant to be starting point for a web application.</li>
              </ul>
              </li>
            </ul>
          </section>
          <section>
            <h3>Drupal vs Symfony Framework</h3>
            <ul>
              <li>Drupal:
                <ul>
                  <li>Full-fledged CMS with lots of ready-made, built-in features</li>
                </ul>
              </li>
              <li>Symfony Framework:
                <ul>
                  <li>Meant to be Customized and Extended from ground-up.</li>
                </ul>
              </li>
            </ul>
          </section>
        </section>
        <section>
          <section>
            <h2>Symfony Community</h2>
          </section>
          <section>
            <h3>Symfony Community</h3>
            <img data-src="images/symfony-community.png">
          </section>
          <section>
            <h3>Symfony Events</h3>
            <img data-src="images/symfony-events.png">
          </section>
        </section>
        <section>
          <section>
            <h1>Symfony Components in Drupal 8</h1>
          </section>
          <section>
            <h3>Symfony Components in Drupal</h3>
            <ul>
              <li>HttpFoundation</li>
              <li>Routing</li>
              <li>EventsDispatcher</li>
              <li>DependencyInjection</li>
              <li>HttpKernel</li>
              -------------------
              <li>Serializer</li>
              <li>Validator</li>
              <li>Yaml</li>
              <li>Console</li>
            </ul>
          </section>
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
            <h3>Drupal 8 Front Controller</h3>
            <img data-src="images/drupal-8-front-controller.jpg">
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
            <h3>Routing</h3>
            <em>"Routing is a process to match a request path to a function, or a controller that then processes that request"</em>
            <br>
            <br>
            <ul><li>Route:
              <ul><li>"The map from the path to the controller"</li></ul>
            </li></ul>
          </section>
          <section>
            <h3>Route in Drupal 7</h3>
            <img data-src="images/hook-menu.png">
          </section>
          <section>
            <h3>Routing in Drupal 7</h3>
            <img data-src="images/drupal-7-index-php-routing.png">
          </section>
          <section>
            <h3>Routing in Drupal 7</h3>
            <img data-src="images/drupal-7-route-finder.png">
          </section>

          <section>
            <h3>Route in Drupal 8</h3>
            <img data-src="images/routing-yml.png">
          </section>
          <section>
            <h3>Routing in Drupal 8</h3>
            <img data-src="images/drupal-8-index-php-routing.png">
          </section>
          <section>
            <h3>Basic of Routing</h3>
            <img data-src="images/routing-overview.jpg">
          </section>
          <section>
            <h3>Basic of Routing Component</h3>
            <img data-src="images/routing-component-basics.jpg">
          </section>
        </section>
        <section>
          <section>
            <h2>EventDispatcher</h2>
          </section>
          <section>
            <h3>Communication between sub-systems</h3>
            <img data-src="images/sub-system-communication.jpg">
          </section>
          <section>
            <h3>Drupal 7 hooks</h3>
            <code>hook_node_delete()</code>
            <img data-src="images/hook-communication.jpg">
          </section>
          <section>
            <h3>Drupal 7 hooks behind the scenes</h3>
            <img data-src="images/hooks-behind-the-scenes.png">
          </section>
          <section>
            <h3>EventDispatcher in Drupal 8</h3>
            <ul>
              <li>Facilitates communication between objects</li>
              <li>Events:
                <ul>
                  <li><em>"Event is any action that an object needs to communicate to other objects"</em></li>
                  <li>Eg. Node deletion</li>
                </ul>
              </li>
            </ul>
            <br>
          </section>
          <section>
            <h3>EventDispatcher: registering listeners</h3>
            <img data-src="images/bruh-listeners.jpg">
          </section>
          <section>
            <h3>EventDispatcher: event</h3>
            <img data-src="images/bruh-event.jpg">
          </section>
          <section>
            <h3>EventDispatcher: dispatching event</h3>
            <img data-src="images/bruh-dispatching.jpg">
          </section>
          <section>
            <h3>Drupal 8</h3>
            <img data-src="images/events-dispatcher-overview.jpg">
          </section>
          <section>
            <h3>Events Examples</h3>
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
            <h3>Drupal 8: Events and Hooks</h3>
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
            <h3>Services</h3>
            <ul>
              <li>Useful Objects</li>
              <img data-src="images/services-yml.png">
            </ul>
          </section>
          <section>
            <h3>Drupal services examples</h3>
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
            <h3>Service Container</h3>
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
            <h3>Dependency Injection</h3>
            <ul>
              <li>Evething (almost) is object</li>
              <li>Objects use objects</li>
              <li>Objects are dependent on objects</li>
            </ul>
          </section>
          <section>
            <h3>Objects should not create dependencies</h3>
            <img data-src="images/object-creating-dependency.png">
          </section>
          <section>
            <h3>Dependencies should be passed</h3>
            <img data-src="images/object-injecting-dependency.png">
          </section>
          <section>
            <h3>Why Dependency Injection?</h3>
            <ul>
              <li>Facilitates encapsulation</li>
              <li>Helps Unit Testing</li>
            </ul>
          </section>
          <section>
            <h3>Service container does DI</h3>
            <ul>
              <li>Takes care of:
                <ul>
                  <li>Creating services</li>
                  <li>Injecting them as dependencies in objects</li>
                </ul>
              </li>
              <li>Also called as Dependency Injection Container</li>
            </ul>
          </section>
          <section>
            <h3>Drupal 8: 2 containers</h3>
            <ul>
              <li>Dependency Injection container: Preferred & recommended</li>
              <li>Legacy container: For non-OO parts</li>
            </ul>
          </section>
          <section>
            <h3>Using Drupal 8 legacy container</h3>
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
            <h3>DrupalKernel</h3>
            <ul>
              <li>Core of Drupal</li>
              <li>Puts everything together</li>
              <li>Extended from <code>HTTPKernelInterface</code></li>
            </ul>
          </section>
          <section>
            <h3>Drupal 8 index.php</h3>
            <img data-src="images/drupal-8-index-php-kernel.png">
          </section>
          <section>
            <h3>DrupalKernel</h3>
            <ul>
              <li>Creating the service container</li>
              <li>Adding services to it, so that they are available for use later</li>
              <li>Passing the request handling to appropriate system</li>
            </ul>
          </section>
        </section>
        <section>
          <section>
            <h2>Serializer</h2>
          </section>
          <section>
            <h3>Serialization</h3>
            <ul>
              <li>Process of translating data structures to a format that can be easily stored and transmitted.
                <ul>
                  <li>And vice versa</li>
                </ul>
              </li>
              <li>
                In Drupal, mostly used for serialization of objects.
              </li>
            </ul>
          </section>
          <section>
            <h3>Serialization component in Drupal 8</h3>
            <ul>
              <li>Heavily used in Drupal 8 APIs</li>
              <li>Drupal web services modules
                <ul>
                  <li>Serialization, RESTful Web Services</li>
                </ul>
              </li>
              <li>Serializer component for converting objects to JSON/XML
                <ul>
                  <li>And vice versa</li>
                </ul>
              </li>
            </ul>
          </section>
        </section>
        <section>
          <section>
            <h2>Validator</h2>
          </section>
          <section>
            <h3>Validator component</h3>
            <ul>
              <li>Used to validate values based on rules</li>
              <li>Generally used for form validation</li>
              <li>Allows to create:
                <ul>
                  <li>Constraints: Rules
                    <ul>
                      <li>Eg. length, email, link</li>
                    </ul>
                  </li>
                  <li>
                    Validators: Objects
                    <ul>
                      <li>Can act on basis of values following/violating constraints.</li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </section>
          <section>
            <h3>Validator in Drupal 8</h3>
            <li>Used to create constraints for form fields of various types
          </section>
        </section>
        <section>
          <section>
            <h2>Yaml</h2>
          </section>
          <section>
            <h3>YAML</h3>
            <ul>
              <li>YAML: YAML Ain't Markup Language</li>
              <li>Humal readable serialization language</li>
              <li>Commonly used to store configuration</li>
            </ul>
          </section>
          <section>
            <h3>Yaml Component</h3>
            <ul>
              <li>Allows parsing and dumping YAML files</li>
            </ul>
          </section>
          <section>
            <h3>Yaml in Drupal 8</h3>
            <ul>
              <li>{module}/{theme}.info.yml</li>
              <li>routing.yml</li>
              <li>services.yml</li>
              <li>Configuration (eg. views are now configuration)</li>
            </ul>
          </section>
        </section>
        <section>
          <section>
            <h2>Console</h2>
          </section>
          <section>
            <h3>Drupal Console</h3>
            <ul>
              <li>Console optimized for Drupal</li>
              <li>Used for debugging & generating skeleton code</li>
              <li>Installed using composer</li>
            </ul>
          </section>
          <section>
            <h3>Drupal Console commands</h3>
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
        <section>
          <section>
            <h2>Easier Upgrades</h2>
          </section>
          <section>
            <h3>Drupal upgrades in past</h3>
            <ul>
              <li>Challenging upgrade between major versions
                <ul>
                  <li>Steep learning curve</li>
                  <li>Difficult upgrade path</li>
                </ul>
              </li>
              <li>Complete rebuild of application</li>
            </ul>
          </section>
          <section>
            <h3>Drupal 8 upgrades</h3>
            <ul>
              <li>Two kind of upgrades
                <ul>
                  <li>Minor</li>
                  <li>Major</li>
                </ul>
              </li>
            </ul>
          </section>
          <section>
            <h3>Drupal 8 minor upgrades</h3>
            <ul>
              <li>8.1 -> 8.2, 8.2 -> 8.3</li>
              <li>Every 6 months</li>
              <li>New Features</li>
              <li>Backward Compatible changes</li>
              <li>Deprecate old stuff</li>
            </ul>
          </section>
          <section>
            <h3>Drupal 8 major upgrades</h3>
            <ul>
              <li>No new features</li>
              <li>Backward compatibility break
                <ul>
                  <li>Remove deprecated stuff</li>
                </ul>
              </li>
            </ul>
          </section>
          <section>
            <h3>Upgrade policy advantages</h3>
            <ul>
              <li>Periodic addition of new features
                <ul><li>Instead of years of wait</li></ul>
              </li>
              <li>Enough time to shed deprecates stuff for major release
                <ul><li>No surprises by major release</li></ul>
              </li>
            </ul>
          </section>
        </section>
        <section>
          <section>
            <h2>Standard Compliance</h2>
          </section>
          <section>
            <h3>Adoption of PSRs</h3>
            <ul>
              <li>PSR 4</li>
              <li>PSR 3</li>
            </ul>
          </section>
        </section>
        <section>
          <section>
            <h2>Hopes & wants</h2>
          </section>
          <section>
            <h3>Symfony's philosophy of loosely coupled independent parts</h3>
            <ul>
              <li>Drupal sub-systems as loosely coupled libraries
                <ul><li>Available for use in other PHP projects</li></ul>
              </li>
            </ul>
          </section>
          <section>
            <h3>More standard compliance</h3>
            <ul>
              <li>Eg. PSR-2 & PSR-2</li>
            </ul>
          </section>
        </section>
        <section>
          <h2>Takeaways</h2>
          <ul>
            <li>Drupal uses symfony components, not symfony framework</li>
            <li>HttpFoundation, Routing help Drupal 8 become API-first</li>
            <li>HttpFoundation, Routing, EventDispatcher, DependencyInjection & DrupalKernal form the core of Drupal 8</li>
          </ul>
        </section>
        <section>
          <h1>Discussions?</h1>
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
