<?php 

    const FAQS_CONTENT = [
        'id'                        => 'faq',
        'isTitleImg'                => false,
        'titleImg'                  => './assets/FAQ.svg',
        'titleText'                 => 'FAQs',
        'titleColor'                => COLORS[1],
        'titleTextTag'              => 'h1',
        'titleTextSize'             => '3.5rem',

        'faqHeaderColor'            => COLORS[1],
        'faqHeaderActiveColor'      => 'black',

        'items'             => [
            [
                'question'  => 'What wallets do you support?',
                'answer'    => 'The Skull Kitty website is compatible with Metamask. You can download the Metamask browser extension <a href="https://metamask.io/download" target="_blank">here.</a>',
                'type'      => 'text'
            ],
            [
                'question'  => 'How many Skull kitties are there in the collection?',
                'answer'    => 'There are 9999 unique Skull Kitties in the collection.',
                'type'      => 'text'
            ],
            [
                'question'  => 'What will the price be per mint?',
                'answer'    => 'All Skull  Kitties are priced at 0.02 ETH.',
                'type'      => 'text'
            ],
            [
                'question'  => 'How many Skull Kitties can I mint per transaction?',
                'answer'    => 'You can mint a maximum of 20 Skull Kitties per trasaction.',
                'type'      => 'text'
            ],
            [
                'question'  => 'How are Skull Kitties generated?',
                'answer'    => 'Skull Kitties are programatically generated at random from over 250 unique combinations.',
                'type'      => 'text'
            ],
            [
                'question'  => 'I have a Yellow Punk, Do I get a free Skull Kitty?',
                'answer'    => 'Yes, all Yellow Punks owners can claim a Free Skull Kitty per wallet. We wouldn’t be where we are without your support ❤️',
                'type'      => 'text'
            ],
            [
                'question'  => 'What’s up with your Smart Contract?',
                'answer'    => 'Our smart contract follows the OpenZeppelin Standards for ERC721, it is a simple and elegant NFT contract perfect for the Skull Kitties, we are also making sure that all our metadata is uploaded to IPFS to create NFTs that technically lasts forever.',
                'type'      => 'text'
            ],
            
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


