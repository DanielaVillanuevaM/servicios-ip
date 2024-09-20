<style>
    #background {
        display: fixed;
        position: absolute;
        bottom: 0;
        z-index: -50;
        width: 100%;

        .row {
            display: flex;
            flex-direction: row;
            width: 100%;

            & .triangle-up {
                width: 100%;
                height: 100%;

                border-left: 70px solid transparent;
                border-right: 70px solid transparent;
                border-bottom: 100px solid;

            }

            & .triangle-down {
                width: 100%;
                height: 100%;

                border-left: 70px solid transparent;
                border-right: 70px solid transparent;
                border-top: 100px solid;

            }
        }

        /* #five {
            & .triangle-up {
                background-color: rgba(120, 74, 219, 0.2);
                border-bottom-color: rgba(120, 74, 219, 0.3);
            }

        } */

        #four {
            & .triangle-down {
                background-color: rgba(120, 74, 219, 0.2);
                /* border-top-color: rgba(120, 74, 219, 0.0);*/
                border-top-color: white;
            }

        }

        #third {
            & .triangle-up {
                background-color: rgba(120, 74, 219, 0.2);
                border-bottom-color: rgba(120, 74, 219, 0.3);
            }

        }

        #second {
            & .triangle-down {
                background-color: rgba(120, 74, 219, 0.3);
                border-top-color: rgba(120, 74, 219, 0.2);
            }

        }

        #first {
            & .triangle-up {
                background-color: rgba(120, 74, 219, 0.3);
                border-bottom-color: rgba(120, 74, 219, 0.5);
            }

        }
    }
</style>
<div id="background">
    <!-- <div id="five" class="row">
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
    </div> -->
    <div id="four" class="row">
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
    </div>
    <div id="third" class="row">
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
    </div>
    <div id="second" class="row">
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
        <div class="triangle-down"></div>
    </div>
    <div id="first" class="row">
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
        <div class="triangle-up"></div>
    </div>
</div>