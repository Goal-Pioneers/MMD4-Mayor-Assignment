
                <section class="base-section cover-section" 
                         id="component-frontpage-showcase"> 
                        <h2> 
                            Ydelser   
                        </h2>

                       <div class="component-container"> 
                                <!-- Options -->
                                <div class="tabs"> 
                                        <ul> 
                                                <span v-for="tab in tabs"> 
                                                        <a class="tab clickable" v-on:click="loadTab"> 
                                                                <li v-bind:id="tab.tagId" v-bind:class="{ active: tab.isActive }"> 
                                                                        {{ tab.title }}
                                                                </li>
                                                        </a>
                                                </span>
                                        </ul>

                                </div>

                                <!-- Tabs -->
                                <div class="component-tab-view">

                                </div>
                       </div>
                </section>