<?php 

    const FAQS_CONTENT = [
        'id'        => 'faq',
        'titleImg'  => './assets/FAQ.svg',
        'items'     => [
            [
                'question'  => 'What wallets do you support?',
                'answer'    => 'faq_answer1'
            ],
            [
                'question'  => 'What is the process of adopting a Junglee?',
                'answer'    => 'faq_answer2'
            ],
            [
                'question'  => 'How many Junglees are up for adoption?',
                'answer'    => 'faq_answer3'
            ],
            [
                'question'  => 'How many Junglees can I adopt in one transaction?',
                'answer'    => 'faq_answer4'
            ],
            [
                'question'  => 'Can I trade my Junglee?',
                'answer'    => 'faq_answer5'
            ]
        ]
    ];
?>


<?php function faq_answer1(){ ?>
    <?php ob_start(); ?>

    The Jungleverse website is compatible with Metamask. You can download the Metamask browser extension <a href="https://metamask.io/download">here</a>

    <?php return ob_get_flush(); ?>
<?php } ?>


<?php function faq_answer2(){ ?>
    <?php ob_start(); ?>

        <div>
            ● Get the MetaMask extension for Google Chrome.
        </div>

        <div>
            ● Load it with ETH. You can also buy through services that allow you to change your
            money
            (fiat) to ETH like Coinbase, RobinHood, Rainbow, or Paypal, and then send to your
            MetaMask
            wallet.
        </div>

        <div>
            ● Finally, click the button that says “Connect your Wallet” to allow our site to
            register
            you with your address
        </div>

        <div>
            ● Then set a quantity and click adopt on this site. Once you have approved your purchase
            on
            Metamask, give it some time for the transaction to go through, And Voila! You have
            adopted
            your own Junglee!
        </div>

    <?php return ob_get_flush(); ?>
<?php } ?>

<?php function faq_answer3(){ ?>
    <?php ob_start(); ?>

    There are a total of 10,000 Junglees that are up for adoption.

    <?php return ob_get_flush(); ?>
<?php } ?>

<?php function faq_answer4(){ ?>
    <?php ob_start(); ?>

    You can adopt upto 20 Junglees/ transaction

    <?php return ob_get_flush(); ?>
<?php } ?>


<?php function faq_answer5(){ ?>
    <?php ob_start(); ?>

    Yes, Junglees can be traded on OpenSea.io. In the future, you can directly trade your Junglees on the Jungleverse Marketplace. 

    <?php return ob_get_flush(); ?>
<?php } ?>


