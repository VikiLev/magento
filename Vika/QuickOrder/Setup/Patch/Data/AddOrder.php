<?php
//
//
//namespace Vika\QuickOrder\Setup\Patch\Data;
//
//
//use Vika\QuickOrder\Model\QuickOrderFactory;
//use Magento\Framework\Setup\Patch\DataPatchInterface;
//use Magento\Framework\DB\TransactionFactory;
//
//class AddOrder implements DataPatchInterface
//{
//    private $modelFactory;
//
//    private $transactionFactory;
//
//    public function __construct(
//        QuickOrderFactory $userFactory,
//        TransactionFactory $transactionFactory
//    ) {
//        $this->modelFactory         = $userFactory;
//        $this->transactionFactory   = $transactionFactory;
//    }
//
//    /**
//     * @inheritDoc
//     */
//    public static function getDependencies()
//    {
//        return [];
//    }
//
//    /**
//     * @inheritDoc
//     */
//    public function getAliases()
//    {
//        return [];
//    }
//
//    /**
//     * @inheritDoc
//     */
//    public function apply()
//    {
//        /** @var \Magento\Framework\DB\Transaction $transaction */
//        $transaction = $this->transactionFactory->create();
//
//        for ($i = 0; $i < 1; $i++) {
//            $model = $this->modelFactory->create();
//            $model->setName(sprintf("Vasya_%d", $i));
//            $model->setphone(rand(18, 999));
//            $transaction->addObject($model);
//        }
//
//        $transaction->save();
//    }
//}

// сделала чтобы проверить будет ли работать, таблица 1 заполнилась, но так как заполнять нам не нужно я закоментировала