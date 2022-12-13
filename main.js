// const SHA526 = require('crypto-js/sha256')

const sha256 = require("crypto-js/sha256")

class Block{
    constructor(index, createdAt, data, previousHash = ''){
        this.index = index
        this.createdAt = createdAt
        this.data = data
        this.previousHash = previousHash
        this.hash = this.calculateHash()
    }

    calculateHash(){
        return sha256(this.index + this.previousHash + this.createdAt + JSON.stringify(this.data)).toString()
    }
}

class BlockChain{
    constructor(){
        this.chain = [this.genesisBlock()]
    }

    genesisBlock(){
        return new Block(0, '13/12/2022', '- Made by Kingban00 -', '0')
    }

    getLatestBlock(){
        return this.chain[this.chain.length - 1]
    }

    addNewBlock(newBlock){
        newBlock.previousHash = this.getLatestBlock().hash
        newBlock.hash = newBlock.calculateHash()
        this.chain.push(newBlock)
    }
}

let chain = new BlockChain()
chain.addNewBlock(new Block('1', '13/12/2022', 'Hello'))
chain.addNewBlock(new Block('2', '14/12/2022', 'World!'))

console.log(JSON.stringify(chain, null, 4))